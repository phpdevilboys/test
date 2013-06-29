<?php defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * CMS Canvas
 *
 * @author      CDN Solutions
 * @link        http://cdnsol.com
 */

class Video extends Admin_Controller 
{
	function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
    	$data = array();
        $data['breadcrumb'] = set_crumbs(array(current_url() => 'Video'));
        $Videos = $this->load->model('video_model');

        // Get data from db
        $Videos->order_by("id", "desc");
        $data['Videos'] = $Videos->get();

    	$this->template->view('admin/video/video', $data);
    }

    //Add a new video
    function add_new(){
    	$data = array( 'mode'=> 'Add' );
        $data['breadcrumb'] = set_crumbs(array('video' => 'Video', current_url() => 'Add Video'));

        if($this->input->post()) {
        	$this->form_validation->set_rules('title', 'Title', 'required|trim');
            $this->form_validation->set_rules('video_type', 'Video Type', 'required|trim');
        	$this->form_validation->set_rules('video_code', 'Video Code', 'required|trim');
        	if ($this->form_validation->run()) {
        		$this->load->model('video_model');
        		$this->video_model->title = $this->input->post('title');
        		$this->video_model->video_code = $this->input->post('video_code');
                $this->video_model->video_type = $this->input->post('video_type');
        		$this->video_model->description = $this->input->post('description');
                $this->video_model->created_at = date('Y-m-d H:i:s');
				$res =  $this->video_model->save();
				$this->session->set_flashdata('message', '<p class="success">Video Saved.<p>');
				redirect(ADMIN_PATH.'/video');
			}
        }
        $this->template->view('admin/video/add-video', $data);
    }

    //public function edit video
    public function edit_video()
    {
    	$data = array();
    	$segment_array = $this->uri->segment_array();
    	$video_id = (int)end($segment_array);
    	//if video id is not found in uri than redirect to video
    	if($video_id === 0) {
    		$this->session->set_flashdata('message', '<p class="attention">Some error occured. Please try again later.</p>');
    		redirect(ADMIN_PATH.'/video');
    	}else{
    		$data = array( 'mode'=> 'Edit' );
	        $data['breadcrumb'] = set_crumbs(array('video' => 'Video', current_url() => 'Edit Video'));
    		$this->load->model('video_model');
    		$video = $this->video_model->where('id', $video_id)->get();
			$data['Video'] = $video;

			//if form submited than update 
			if($this->input->post()) {
				$this->form_validation->set_rules('title', 'Title', 'required|trim');
                $this->form_validation->set_rules('video_type', 'Video Type', 'required|trim');
        		$this->form_validation->set_rules('video_code', 'Video Code', 'required|trim');
        		if ($this->form_validation->run()) {
        			$this->video_model->title = $this->input->post('title');
	        		$this->video_model->video_code = $this->input->post('video_code');
                    $this->video_model->video_type = $this->input->post('video_type');
	        		$this->video_model->description = $this->input->post('description');
					$res =  $this->video_model->save();
					$this->session->set_flashdata('message', '<p class="success">Video Updated.<p>');
					redirect(ADMIN_PATH.'/video');
        		}
			}

    	}
    	$this->template->view('admin/video/add-video', $data);
    }

    //Delete an video
    public function delete()
    {
    	if ($this->input->post('selected')) {
        	$this->load->model('video_model');
            $selected = $this->input->post('selected');
            $video_model = $this->video_model->where_in('id', $selected)->get();
            $result = $video_model->delete_all();
            if( $result ) {
            	$this->session->set_flashdata('message', '<p class="success">The selected items were successfully deleted.</p>');
            }else{
            	$this->session->set_flashdata('message', '<p class="attention">Some error occured. Please try again later.</p>');
            }
        } else {
        	$this->session->set_flashdata('message', '<p class="attention">Nothing selected to delete.</p>');
        }
        redirect(ADMIN_PATH.'/video');
    }
}