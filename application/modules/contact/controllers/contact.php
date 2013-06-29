<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Contact extends Public_Controller 
{
	public function __construct()
	{
		parent::__construct();	
	}

	public function index()
	{
		$this->template->view('contact');
	}

	public function save()
	{
		if((bool)$_SERVER['HTTP_REFERER']!==TRUE){
			redirect(site_url('contact'));
			die;
		}

		// Check server side validation
		 $this->form_validation->set_rules('catagory', 'Category', 'trim|required');
		 $this->form_validation->set_rules('subject', 'Subject', 'trim|required');
		 $this->form_validation->set_rules('message', 'Message', 'trim|required');
		 $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		 
		if ($this->form_validation->run() == FALSE)
		{
			$this->session->set_flashdata('error','All fields are required with valid data!<br />'. validation_errors());
		}else {
			//Load model and save 
			$this->load->model('contact_model');
			$this->contact_model->from_array($this->input->post());
			$this->contact_model->create_at = date('Y-m-d H:i:s');
			$contact_save = $this->contact_model->save();

			if($contact_save){
				//Getting the email settings
				$this->load->model('email/email_template_model', 'email_template');
				$this->email_template
					->get_where(array('module'=>'contact', 'is_default'=>1));
				
				//Send Mail to user
	            $this->load->library('email');
	            $this->email->initialize();

	            $subject = (isset($this->email_template->subject))?$this->email_template->subject:'';
	            $this->email->subject($subject);
	            $this->email->to($this->email->contact_email);

	            $mesage_data = array(
	            	'message' 	=> array(
	            		'body' 		=> (isset($this->email_template->body))?$this->email_template->body:'',
	            		'intro'		=> $this->input->post('email').' contacted you for enquiry about '.$this->input->post('catagory'),
	            		'subject'	=> $this->input->post('subject'),
	            		'message'	=> $this->input->post('message'),
	            		'footer'	=> (isset($this->email_template->signature))?$this->email_template->signature:'',
            		),
	        	);
	            $message = $this->load->view('email/registration', $mesage_data, true);
	            $this->email->message($message);
	            $res = $this->email->send();
	            
	            $this->session->set_flashdata('message','Thank you for cotacting us. We will contact you soon.');
			}else{
				$this->session->set_flashdata('error','Some error occured. Please try again.');	
			}
		}

		redirect($_SERVER['HTTP_REFERER']);
	}
}