<?php if ( !defined('BASEPATH') ) exit('No direct access allowed.');

/**
 * GMA
 * 
 * @author CDN Solutions
 * @link http://cdnsol.com
 *
 */

class Accounts extends Member_Controller
{
	public function __construct() 
	{
		parent :: __construct();
	}

	public function index()
	{
            $data = array();
            $user_id = $this->session->userdata('user_id');

            //Get User's Account Details
            $this->load->model('portfolio_model');
            $data['accounts'] = $this->portfolio_model->get_all_portfolio($user_id);
            
            $this->template->view('accounts/account', $data);
	}
        
        /**
         * 
         */
	public function view_all()
	{
            $data = array();
            $user_id = $this->session->userdata('user_id');
            
            //Get User's Account Details
            $this->load->model('portfolio_model');
            $data['accounts'] = $this->portfolio_model->get_all_portfolio($user_id);
            
            $this->template->view('accounts/all-accounts', $data);
	}

	/**
	 * This function accept only ajax request
	 */
	public function add_asset_class()
	{
            $result = array('status' => 'false');
            if ($this->input->is_ajax_request()) {
                $assetclass = $this->input->get('assetclass');
                
                //Save to db
                $this->load->model('portfolio_model');
                $class_id = $this->portfolio_model->add_new_asset_class($assetclass);
                
                if( is_int($class_id) )
                    $result = array('status' => 'true');
                
                $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($result));
                
            }else{
                    die("No direct access allowed");
            }
	}
}