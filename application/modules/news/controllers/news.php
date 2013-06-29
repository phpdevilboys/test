<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class News extends Public_Controller {

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
		$this->load->model('news_model');
		/** Initialize Pagignation */
		$this->load->library('pagination');
		$config['base_url']		= site_url('news/view');
		//$config['uri_segment'] = 3;
		$config['total_rows']	= $this->news_model->count();;
		$config['per_page']		= RECORD_PER_PAGE;
		$config['next_tag_open'] = '<span>';
		$config['next_tag_close'] = '</span>';
		$config['next_link'] = 'Next';
		$config['prev_tag_open'] = '<span>';
		$config['prev_tag_close'] = '</span>';
		$config['prev_link'] = 'Prev';
		$this->pagination->initialize($config);
		$data['paging_links'] = $this->pagination->create_links();
		$data['news'] = $this->news_model->order_by('id', 'desc')
			->get(RECORD_PER_PAGE, $this->uri->segment(3));

		$this->template->view('site/all-news', $data);
	}

	public function single()
	{
		$data = array();
		$news_id = (int) end($this->uri->segment_array());
		$this->load->model('news_model');
		if($news_id !== 0){
			$this->news_model->where('id', $news_id);
		}
		$data['news'] = $this->news_model->order_by('id', 'desc')
			->get();

		$this->template->view('site/all-news', $data);
	}
}