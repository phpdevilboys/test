<?php (defined('BASEPATH')) OR exit('No direct script access allowed');
/**
 * GMA
 *
 * @author      CDN Solutions
 * @link        http://cdnsol.com
 */

class Register extends Public_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    function index()
    {
    	$this->load->library('antispam');
		$configs = array(
			'img_path' => './captcha/',
			'img_url' => base_url() . 'captcha/',
			'img_height' => '50',
		);
        $cap['captcha'] = $this->antispam->get_antispam_image($configs);
        $this->session->set_userdata('captcha', $cap['captcha']['word']);
    	$this->template->view("register", $cap);
    }

    public function save()
    {
        // Validate form
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[gma_user.email_id]');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[con_password]');
        $this->form_validation->set_rules('con_password', 'Confirm Password', 'trim|required');
        $this->form_validation->set_rules('captcha', 'Captcha', 'trim|required|callback_validate_captcha');
        $this->form_validation->set_rules('term', 'Term & Condition', 'required');

        if ($this->form_validation->run() == FALSE)
        {
                $this->session->set_flashdata('error','All fields are required with valid data!<br />'. validation_errors());
        }
        else
        {	
            //Load model
            $this->load->model('member_model');
            
            //Set data array
            $member_details['email'] = $this->input->post('email');
            $member_details['password'] = $this->input->post('password');
            
            $user = $this->member_model->add_new_member($member_details);
            
            
            if ($user->getUserId()!==NULL) {

                //Getting the email Template
                $this->load->model('email_template_model', 'email_template');
                $mail_detail = $this->email_template->get_template('registration');
                
                $subject = (isset($mail_detail['subject']))?$mail_detail['subject']:'Registration Successfull';
                $defaultBody = 'Dear User,<br />Thanks for registering with us. Please click the following link to varify your email adderss.If this is not supported by your browser you can copy paste the link.';

                //Send Mail to user
                $this->load->library('email');
                $this->email->initialize();
                $this->email->subject($subject);
                $this->email->to($this->input->post('email'));
                $link = $this->generate_auth_link($user);

                $mesage_data = array(
                    'message'=> array(
                            'body' 	=> (isset($mail_detail['body']))?$mail_detail['body']:$defaultBody,
                            'link'	=> $link,
                            'footer'	=> (isset($mail_detail['add_sign']))?$mail_detail['add_sign']:'',
                    ),
                );

                $message = $this->load->view('email/registration', $mesage_data, true);
                $this->email->message($message);
                $this->email->send();

                $this->session->set_flashdata('message','Thank You for joining us! Please check your email.');

            }else {
                $this->session->set_flashdata('error','There was an error please try again!');
            }
            redirect(site_url().'/member/register');
        }
        redirect('member/register');
    }

    public function validate_captcha($userWords)
    {
        if( $this->session->userdata('captcha') === $userWords )
        {
                return true;
        }
        $this->form_validation->set_message('validate_captcha', 'Captcha word is not valid.');
        return false;
    }
	
    private function generate_auth_link($user){
        $token = md5($user->getUserId() . time() . mt_rand());

        //Create and store auth toen
        $auth_token = new Entities\GmaUserAuthTemp;
        $auth_token->setUserId($user->getUserId());
        $auth_token->setAuthToken($token);
        $auth_token->setSentOn(new DateTime());
        $this->doctrine->em->persist($auth_token);
        $this->doctrine->em->flush();
        $link = site_url(). '/member/activate/mail/'. $user->getUserId() . '/' . $token;
        return $link;
    }

    public function unique_email()
    {
        if ($this->input->is_ajax_request()) {
            $data = array(
                    'status' => true,
                    'url'	 => theme_url().'/assets/images/right_tick.png'
            );
            $email_id = $this->input->get('email');

            //Check for mail
            $user = $this->doctrine->em->getRepository('Entities\GmaUser');
            if($user->findOneBy(array('emailId'=>$email_id))!==NULL){
                $data = array(
                        'status' => false,
                        'url'	 => theme_url().'/assets/images/wrong_tick.png'
                );
            }
            $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($data));
        } else {
            die("No direct access allowed");
        }
    }
}