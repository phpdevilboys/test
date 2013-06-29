<?php (defined('BASEPATH')) OR exit('No direct script access allowed');

class Member extends Admin_Controller{
    
    function __construct()
    {
        parent::__construct();
    }
    
    function index()
    {
        $data = array();
        $data['breadcrumb'] = set_crumbs(array(current_url() => 'Member'));
        $this->load->library('pagination');
        $this->load->model('member_model');
        $data['total_members'] = $this->member_model->get_all_member();
        $data['query_string'] = ( ! empty($_SERVER['QUERY_STRING'])) ? '?' . $_SERVER['QUERY_STRING'] : '';
        
        //Setting Paging
        $data['per_page'] = 20;
        $config['base_url'] = site_url(ADMIN_PATH . '/member/index/');
        $config['per_page'] = $data['per_page'];
        $config['uri_segment'] = '4';
        $config['num_links'] = 5;
        $config['suffix'] = $data['query_string'];
        $config['total_rows'] = count($data['total_members']);
        $this->pagination->initialize($config); 
        
        $data['current_row'] = $this->uri->segment(4, 0);
        $data['members'] = $this->member_model->get_all_member($data['current_row'], $data['per_page']);
        $this->template->view('admin/member', $data);
    }
    
    function change_status()
    {
        $result['status'] = FALSE;
        if($this->input->is_ajax_request())
        {
            $member_id = $this->input->get('member_id');
            $action = $this->input->get('action');
            $active = ($action==='activate')?TRUE:FALSE;
            
            //Load model
            $this->load->model('member_model');
            $this->member_model->change_active_status($member_id, $active);
                    
            $result['status'] = TRUE;
        }
        else 
        {
            $result['message'] = 'No direct url access allowed';
        }
        $this->output->set_content_type('application/json')
                ->set_output(json_encode($result));
    }
}
