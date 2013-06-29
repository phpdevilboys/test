<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Video extends Public_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->view();
	}

	public function view()
	{
		$data = array();
		$this->load->model('video_model');
		$data['videos'] = $this->video_model
			->order_by('id', 'DESC')
			->get();
		$this->template->view('video', $data);
	}
}