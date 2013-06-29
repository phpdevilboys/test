<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Public_Controller extends MY_Controller
{
	function __construct()
	{
		parent::__construct();

		//If user is logged in deny login & register
		if( $this->session->userdata('is_logged_in') ) {
			$uri_segment = $this->uri->segment_array();
			$current = end($uri_segment);
			if($current === 'login' ||  $current === 'register')
			redirect('member');
		}
	}
}

/* The Public_Controller class is autoloaded as required */
