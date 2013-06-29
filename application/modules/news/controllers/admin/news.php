<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class News extends Admin_Controller {

	function __construct()
	{
		parent::__construct();	
	}

	public function index()
	{
		$data = array();
        $data['breadcrumb'] = set_crumbs(array(current_url() => 'News'));
        $news = $this->load->model('news_model');

        // Get data from db
        $news->order_by("id", "desc");
        $data['news'] = $news->get();

		$this->template->view('admin/news', $data);
	}

	public function add_news()
	{
        $data = array();
		$data['mode'] = 'Add';
        $data['breadcrumb'] = set_crumbs(array('news' => 'News', current_url() => 'Add News'));
        $this->load->model('news_model');

        //Save data
        if($this->input->post()){
        	$this->form_validation->set_rules('title', 'Title', 'required|trim');
        	$this->form_validation->set_rules('description', 'Description', 'required|trim');
        	if ( $this->form_validation->run() ) {
                //if file uploaded
                if($_FILES['image']['name']){
                    $new_name = time();
                    //Create a new dir
                    mkdir(NEWS_UPLOAD_DIR.$new_name);
                    $config['upload_path']      = NEWS_UPLOAD_DIR.$new_name;
                    $config['file_name']        = $new_name;
                    $config['allowed_types']    = 'gif|jpg|png';
                    $config['max_size']         = '100';
                    $config['max_width']        = '1024';
                    $config['max_height']       = '768';

                    $this->load->library('upload', $config);
                    $result = $this->upload->do_upload('image');
                    if( $result ){
                        $uploaded_file_detail = $this->upload->data();
                        //Create new directory and save resized images
                        //27*27, original
                        mkdir(NEWS_UPLOAD_DIR.$new_name.'/25x25');
                        //resize image
                        $config['image_library'] = 'gd2';
                        $config['source_image'] = $uploaded_file_detail['full_path'];
                        $config['new_image']    = NEWS_UPLOAD_DIR.$new_name.'/25x25/'.$uploaded_file_detail['file_name'];
                        //$config['create_thumb'] = TRUE;
                        $config['maintain_ratio'] = TRUE;
                        $config['width']     = 75;
                        $config['height']   = 50;
                        $this->load->library('image_lib', $config); 
                        $this->image_lib->resize();
                        $this->news_model->news_image = $uploaded_file_detail['file_name'];
                    }
                }

        		$this->news_model->title = $this->input->post('title');
                $this->news_model->description = $this->input->post('description');
        		$this->news_model->news_date = $this->input->post('news_date');

                $this->news_model->created_at = date('Y-m-d H:i:s');
        		$res =  $this->news_model->save();
				$this->session->set_flashdata('message', '<p class="success">News Saved.<p>');
				redirect(ADMIN_PATH.'/news');
        	}
        }
        $this->template->add_package(array('ckeditor', 'admin_jqueryui'));
        $this->template->view('admin/add-news', $data);
	}

	public function edit()
	{
		$data = array();
    	$segment_array = $this->uri->segment_array();
    	$news_id = (int)end($segment_array);

    	//if news id is not found in uri than redirect to video
    	if($news_id === 0) {
    		$this->session->set_flashdata('message', '<p class="attention">Some error occured. Please try again later.</p>');
    		redirect(ADMIN_PATH.'/news');
    	}else{
    		$data = array( 'mode'=> 'Edit' );
	        $data['breadcrumb'] = set_crumbs(array('news' => 'News', current_url() => 'Edit News'));
	        $this->load->model('news_model');
    		$news = $this->news_model->where('id', $news_id)->get();
			$data['News'] = $news;

			//Save data
	        if($this->input->post()){
	        	$this->form_validation->set_rules('title', 'Title', 'required|trim');
	        	$this->form_validation->set_rules('description', 'Description', 'required|trim');

	        	if ( $this->form_validation->run() ) {

                    //if file uploaded
                if($_FILES['image']['name']){
                    $new_name = time();
                    //Create a new dir
                    mkdir(NEWS_UPLOAD_DIR.$new_name);
                    $config['upload_path']      = NEWS_UPLOAD_DIR.$new_name;
                    $config['file_name']        = $new_name;
                    $config['allowed_types']    = 'gif|jpg|png';
                    $config['max_size']         = '100';
                    $config['max_width']        = '1024';
                    $config['max_height']       = '768';

                    $this->load->library('upload', $config);
                    $result = $this->upload->do_upload('image');
                    if( $result ){
                        $uploaded_file_detail = $this->upload->data();
                        //Create new directory and save resized images
                        //27*27, original
                        mkdir(NEWS_UPLOAD_DIR.$new_name.'/25x25');
                        //resize image
                        $config['image_library'] = 'gd2';
                        $config['source_image'] = $uploaded_file_detail['full_path'];
                        $config['new_image']    = NEWS_UPLOAD_DIR.$new_name.'/25x25/'.$uploaded_file_detail['file_name'];
                        //$config['create_thumb'] = TRUE;
                        $config['maintain_ratio'] = TRUE;
                        $config['width']     = 75;
                        $config['height']   = 50;
                        $this->load->library('image_lib', $config); 
                        $this->image_lib->resize();
                        $this->news_model->news_image = $uploaded_file_detail['file_name'];
                    }
                }
	        		$this->news_model->title = $this->input->post('title');
                    $this->news_model->news_date = $this->input->post('news_date');
	        		$this->news_model->description = $this->input->post('description');
	        		$res =  $this->news_model->save();
					$this->session->set_flashdata('message', '<p class="success">News Updated.<p>');
					redirect(ADMIN_PATH.'/news');
	        	}
	    	}
		}
        $this->template->add_package(array('ckeditor', 'jquerytools'));
    	$this->template->view('admin/add-news', $data);
	}

	//Delete an video
    public function delete()
    {
    	if ($this->input->post('selected')) {
        	$this->load->model('news_model');
            $selected = $this->input->post('selected');
            $news_model = $this->news_model->where_in('id', $selected)->get();
            $result = $news_model->delete_all();
            if( $result ) {
            	$this->session->set_flashdata('message', '<p class="success">The selected items were successfully deleted.</p>');
            }else{
            	$this->session->set_flashdata('message', '<p class="attention">Some error occured. Please try again later.</p>');
            }
        } else {
        	$this->session->set_flashdata('message', '<p class="attention">Nothing selected to delete.</p>');
        }
        redirect(ADMIN_PATH.'/news');
    }
}