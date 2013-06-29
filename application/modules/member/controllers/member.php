<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * GMA
 *
 * @author      CDN Solutions
 * @link        http://cdnsol.com
 */
class Member extends Member_Controller {

    protected $memberProfile;

    function __construct() {
        parent::__construct($redirectUrl = "member/login");
        $this->memberProfile = $this->get_member_profile();
    }

    public function index() {
        $this->update_profile();
    }

    public function update_profile() {
        //Array to send view
        $view_data = array();

        $this->load->model('member_model');
        //Get Security Questions
        $questions = $this->member_model->get_security_question();
        $securrity_question = "";
        foreach ($questions as $question) {
            $securrity_question[$question->getQuesId()] = ucfirst($question->getQuestion());
        }
        $view_data['securrity_question'] = $securrity_question;

        //if submitted then save the form
        if ($this->input->post('submit')) {
            //Set validations
            $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|alpha');
            $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|alpha');
            $this->form_validation->set_rules('city', 'City', 'trim|required');
            $this->form_validation->set_rules('state', 'State', 'trim|required');
            $this->form_validation->set_rules('zip_code', 'Zip Code', 'trim|required|integer');
            $this->form_validation->set_rules('security_ques_1', 'Security quesion 1', 'trim|required');
            $this->form_validation->set_rules('security_ans_1', 'Security answer 1', 'trim|required');
            $this->form_validation->set_rules('security_ques_2', 'Security Quesion 2', 'trim|required');
            $this->form_validation->set_rules('security_ans_2', 'Security answer 2', 'trim|required');

            if ($this->form_validation->run() == FALSE) {
                $this->session->set_flashdata('error', 'All fields are required with valid data!<br />' . validation_errors());
            } else {

                $user_data = $this->input->post();
                $date_of_birth = null;
                if ($this->input->post('date_of_birth') !== "") {
                    $date = new DateTime();
                    $date_of_birth = $date->setTimestamp(strtotime($this->input->post('date_of_birth')));
                }
                $user_data['date_of_birth'] = $date_of_birth;

                $user = $this->member_model->update_member_profile($this->memberProfile['userId'], $user_data);

                if (is_int($user->getUserId())) {
                    $this->session->set_flashdata('message', 'Profile details saved successfully.');
                    redirect('member/accounts');
                } else {
                    $this->session->set_flashdata('error', 'Some error occured. Please try again later.');
                }
            }
        }
        $view_data['memberProfile'] = $this->get_member_profile();
        if ($view_data['memberProfile']['isCompleteProfile'] === true) {
            $this->template->add_javascript(theme_url('assets/js/edit-profile.js'));
            $this->template->view('edit-profile', $view_data);
            //die();
        } else {
            $this->template->view('profile', $view_data);
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        $this->output->set_header('Pragma: no-cache');
        $this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
        $this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
        redirect(site_url());
    }

    /**
     * This function accept ajax reqiest for change password.
     */
    public function chage_password() {
        $result['status'] = FALSE;
        if ($this->input->is_ajax_request()) {
            $member_detail = $this->get_member_profile();
            //Validate data
            $this->form_validation->set_rules('old_pwd', 'Old password', 'trim|required|callback_validate_password');
            $this->form_validation->set_rules('new_pwd', 'New password', 'trim|required');
            $this->form_validation->set_rules('re_pwd', 'Confirm Password', 'trim|required|matches[new_pwd]');

            if ($this->form_validation->run() === FALSE) {
                $result['message'] = validation_errors();
            } else {
                $post_data = $this->input->post();
                $member_detail = $this->get_member_profile();
                //load Model
                $this->load->model('member_model');
                $this->member_model->update_password($member_detail['userId'], $post_data['new_pwd']);

                $result['status'] = TRUE;
                $result['message'] = 'Password Changed Sucessfully';
                //Getting the email Template
                $this->load->model('email_template_model', 'email_template');
                $mail_detail = $this->email_template->get_template('changepassword');
              
                $subject = (isset($mail_detail['subject']))?$mail_detail['subject']:'Password Changed Successfully';

                $defaultBody = 'Dear User,<br />Your password is changed successfully.';

                //Send Mail to user
                $this->load->library('email');
                $this->email->initialize();
                $this->email->subject($subject);
                $this->email->to($member_detail['emailId']);

                $message_data = array(
                    'message' => array(
                        'body' => (isset($mail_detail['body'])) ? $mail_detail['body'] : $defaultBody,
                        'footer' => (isset($mail_detail['add_sign'])) ? $mail_detail['add_sign'] : '',
                    ),
                );

                $message = $this->load->view('email/registration', $message_data, true);
                $this->email->message($message);
                $this->email->send();
                $result['emaiL_debug'] = $this->email->print_debugger();
            }
        } else {
            $result['message'] = 'No direct accees allowed.';
        }

        $this->output->set_content_type('applcation/json')
                ->set_output(json_encode($result));
    }

    /**
     * Varify User
     */
    public function validate_password($oldPassword) {
        $member_detail = $this->get_member_profile();
        $password = md5($this->config->item('encryption_key') . $oldPassword);
        $this->form_validation->set_message('validate_password', 'Password do not match.');
        if ($password === $member_detail['password']) {
            return TRUE;
        }
        return FALSE;
    }

    /**
     * Handle ajax request for change personal details
     */
    function chage_personal_details() {
        $result['status'] = FALSE;

        if ($this->input->is_ajax_request()) {

            //Validate data
            $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|alpha');
            $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|alpha');
            $this->form_validation->set_rules('mobile_num', 'Mobile Number', 'trim|integer');

            if ($this->form_validation->run() === FALSE) {
                $result['message'] = validation_errors();
            } else {
                $post_data = $this->input->post();
                $member_detail = $this->get_member_profile();

                //Date Object
                $date_of_birth = null;
                if ($this->input->post('date_of_birth') !== "") {
                    $date = new DateTime();
                    $date_of_birth = $date->setTimestamp(strtotime($this->input->post('date_of_birth')));
                }
                $post_data['date_of_birth'] = $date_of_birth;

                //load Model
                $this->load->model('member_model');
                $mod_res = $this->member_model->update_personal_details($member_detail['userId'], $post_data);
                $result['status'] = TRUE;
                $result['message'] = 'Personal details updated successfully.';
            }
        } else {
            $result['message'] = 'No direct accees allowed.';
        }

        $this->output->set_content_type('applcation/json')
                ->set_output(json_encode($result));
    }

    function change_details() {

        $result['status'] = FALSE;

        if ($this->input->is_ajax_request()) {

            $post_data = $this->input->post();

            //Validate data
            switch ($post_data['fromwhere']) {
                case 'security':

                    $this->form_validation->set_rules('security_ques_1', 'Security Question 1', 'trim|required');
                    $this->form_validation->set_rules('security_ans_1', 'Security Answer 1', 'trim|required');
                    $this->form_validation->set_rules('security_ques_2', 'Security Question 2', 'trim|required');
                    $this->form_validation->set_rules('security_ans_2', 'Security Answer 2', 'trim|required');

                    break;
                case 'alternate_info':

                    $this->form_validation->set_rules('city', 'City', 'trim|required');
                    $this->form_validation->set_rules('state', 'State', 'trim|required');
                    $this->form_validation->set_rules('zip_code', 'Zip Code', 'trim|required|integer');
                    
                    break;
                case 'contact_info':

                    $this->form_validation->set_rules('sec_email_id', 'Secondary Email', 'trim|email');
                    $this->form_validation->set_rules('sec_mobile_num', 'Secondary Mobile Number', 'trim|integer');

                    break;
            }

            if ($this->form_validation->run() === FALSE) {
                $result['message'] = validation_errors();
            } else {
                $post_data = $this->input->post();

                $member_detail = $this->get_member_profile();
                //load Model
                $this->load->model('member_model');
                $mod_res = $this->member_model->update_personal_details($member_detail['userId'], $post_data);
                $result['status'] = TRUE;
                $result['message'] = isset($post_data['msg']) ? $post_data['msg'] : '';
            }
        } else {
            $result['message'] = 'No direct accees allowed.';
        }

        $this->output->set_content_type('applcation/json')
                ->set_output(json_encode($result));
    }

}
