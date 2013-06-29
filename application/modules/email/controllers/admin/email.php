<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

class Email extends Admin_Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $data = array();
        $data['breadcrumb'] = set_crumbs(array(current_url() => 'Email'));
        $email = $this->load->model('email_template_model');

        // Get data from db
        $email->order_by("id", "desc");
        $data['email'] = $email->get();

        $this->template->view('admin/email-template', $data);
    }

    public function add_email_template() {
        $data = array();
        $data['mode'] = 'Add';
        $data['breadcrumb'] = set_crumbs(array('email' => 'Email', current_url() => 'Add Email Template'));
        //Save data
        if ($this->input->post()) {
            $this->form_validation->set_rules('title', 'Title', 'required|trim');
            $this->form_validation->set_rules('subject', 'Subject', 'required|trim');
            $this->form_validation->set_rules('body', 'Body', 'required|trim');
            $this->form_validation->set_rules('signature', 'Body', 'required|trim');

            if ($this->form_validation->run()) {
                $this->load->model('email_template_model');
                $this->email_template_model->title = $this->input->post('title');
                $this->email_template_model->subject = $this->input->post('subject');
                $this->email_template_model->body = $this->input->post('body');
                $this->email_template_model->created_date = date('Y-m-d H:i:s');
                $this->email_template_model->module = $this->input->post('module');
                $this->email_template_model->add_sign = $this->input->post('signature');
                $this->email_template_model->is_default = $this->input->post('is_default');

                //If first template then make it default
                $email_template = new Email_template_model();
                $email_template->get_where(array('module' => $this->input->post('module')));
                if (!$email_template->exists()) {
                    $this->email_template_model->is_default = '1';
                } else if ($this->input->post('is_default') == '1') {
                    $email_template->update('is_default', '0');
                }
                $res = $this->email_template_model->save();
                $this->session->set_flashdata('message', '<p class="success">
				Email Template Saved.<p>');
                redirect(ADMIN_PATH . '/email');
            }
        }
        $this->template->add_package(array('ckeditor'));
        $this->template->view('admin/add-email-template', $data);
    }

    public function edit() {

        $data = array();
        $segment_array = $this->uri->segment_array();
        $email_id = (int) end($segment_array);

        //if news id is not found in uri than redirect to video
        if ($email_id === 0) {
            $this->session->set_flashdata('message', '<p class="attention">Some error occured. Please try again later.</p>');
            redirect(ADMIN_PATH . '/email');
        } else {
            $data = array('mode' => 'Edit');
            $data['breadcrumb'] = set_crumbs(array('email' => 'Email', current_url() => 'Edit Email Template'));
            $this->load->model('email_template_model');
            $email = $this->email_template_model->where('id', $email_id)->get();
            $data['Email'] = $email;

            //Save data
            if ($this->input->post()) {
                $this->form_validation->set_rules('title', 'Title', 'required|trim');
                $this->form_validation->set_rules('subject', 'Subject', 'required|trim');

                if ($this->form_validation->run()) {
                    $this->email_template_model->title = $this->input->post('title');
                    $this->email_template_model->subject = $this->input->post('subject');
                    $this->email_template_model->title = $this->input->post('title');
                    $this->email_template_model->subject = $this->input->post('subject');
                    $this->email_template_model->body = $this->input->post('body');
                    $this->email_template_model->is_default = $this->input->post('is_default');
                    $this->email_template_model->updated_date = date('Y-m-d H:i:s');
                    $this->email_template_model->module = $this->input->post('module');
                    $this->email_template_model->add_sign = $this->input->post('signature');

                    if ($this->input->post('is_default') == '1') {
                        $email_template = new email_template_model();
                        $email_template->update('is_default', '0');
                    }

                    $res = $this->email_template_model->save();
                    $this->session->set_flashdata('message', '<p class="success">Email Template Updated.<p>');
                    redirect(ADMIN_PATH . '/email');
                }
            }
        }

        $this->template->add_package(array('ckeditor'));
        $this->template->view('admin/add-email-template', $data);
    }

    //Delete an video
    public function delete() {
        if ($this->input->post('selected')) {
            $this->load->model('email_template_model');
            $selected = $this->input->post('selected');
            $news_model = $this->email_template_model->where_in('id', $selected)->get();
            $result = $news_model->delete_all();
            if ($result) {
                $this->session->set_flashdata('message', '<p class="success">The selected items were successfully deleted.</p>');
            } else {
                $this->session->set_flashdata('message', '<p class="attention">Some error occured. Please try again later.</p>');
            }
        } else {
            $this->session->set_flashdata('message', '<p class="attention">Nothing selected to delete.</p>');
        }
        redirect(ADMIN_PATH . '/email');
    }

}
