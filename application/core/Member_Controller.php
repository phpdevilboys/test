<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Member_Controller extends MY_Controller
{

	// Save member Profle

	private $memberProfile;

	function __construct( $redirectUrl = 'member/login' )
	{
		parent::__construct();
		//Check user is logged in 
		$this->is_logged_in();

	}

	public function is_logged_in()
	{
		if($this->session->userdata('is_logged_in') === FALSE){
			redirect('member/login');
		}
		return true;
	}

	public function get_member_profile(){
		$member_id = $this->session->userdata('user_id');
		$this->load->model('member_model');
		$this->memberProfile = $this->member_model->member_detail($member_id);
		$this->session->set_userdata('member_detail', $this->memberProfile);
		return $this->memberProfile;
	}
}
