<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Email_setting extends Admin_Controller {
	
	function __construct()
	{
		parent::__construct();	
	}

	function index()
	{
		$data = array();
		$data['breadcrumb'] = set_crumbs(array('email' => 'Email', current_url() => 'Add Email Template'));	

		$this->load->model('email_settings_model');
    	$email_setting =$this->email_settings_model->get();
		//If form submit than run validation and db operation
		if($this->input->post()) {
			//If protocol is SMTP host, user and password required
			if($this->input->post('protocol')=='smtp'){
				$this->form_validation->set_rules('host', 'Host', 'required|trim');
	        	$this->form_validation->set_rules('username', 'Username', 'required|trim');
            	$this->form_validation->set_rules('password', 'Password', 'required|trim');
			}

            $this->form_validation->set_rules('contact_email', 'Contact Email', 'valid_email|trim');
            $this->form_validation->set_rules('support_email', 'Support Email', 'valid_email|trim');

            if( $this->form_validation->run() ) {
            	if( $email_setting->exists() ) {
            		$email_setting->from_array($this->input->post());
            		$email_setting->updated_at = date('Y-m-d H:i:s');

            		if( $this->input->post('protocol')=='mail' ){
						$email_setting->host = NULL;
						$email_setting->username = NULL;
						$email_setting->password = NULL;
            		}

            		$email_setting->save();
            		$this->session->set_flashdata('message', '<p class="success">Email settings Saved.<p>');
            		$email_setting->save();
            		$this->session->set_flashdata('message', '<p class="success">Email settings Saved.<p>');
            	}else {
            		$email_setting->from_array($this->input->post());
            		$email_setting->created_at = date('Y-m-d H:i:s');
            		$email_setting->save();
            		$this->session->set_flashdata('message', '<p class="success">Email settings Saved.<p>');
            	}
            	redirect(ADMIN_PATH.'/email/email-setting');
            }
		}

		$data['Setting'] = $email_setting;
		$this->template->view('admin/email-settings', $data);
	}
}