<?php

if (!defined('BASEPATH'))
    exit('No direct access allowed.');

/**
 * GMA
 * 
 * @author CDN Solutions
 * @link http://cdnsol.com
 *
 */
class Portfolio extends Member_Controller {

    protected $memberProfile;

    function __construct() {
        parent::__construct();
        $this->memberProfile = $this->get_member_profile();
    }

    public function create_investment_account() {
        $data = array();
        //Get 401k providers
        $gmaPortfolio = $this->doctrine->em->getRepository('Entities\GmaMaster401kProvider');

        $data['provider_401k'] = $gmaPortfolio->findAll();

        if ($this->input->post()) {
            //Set rules for validation
            $this->form_validation->set_rules('portfolio_name', 'Portfolio Name', 'trim|required');
            if ($this->input->post('portfolio_type') == 1) {
                $this->form_validation->set_rules('financial_advisor_name', 'Financial Advisor Name', 'trim|required');
                $this->form_validation->set_rules('firm_name', 'Firm Name', 'trim|required');
                $this->form_validation->set_rules('financial_advisor_emailid', 'Financial Advisor Email', 'trim|required');
            } else {
                $this->form_validation->set_rules('provider_401K', '401K Provider', 'trim|required');
            }

            //Validate form
            if ($this->form_validation->run()) {
                
                //If form is valid save details to db
                $this->load->model('portfolio_model');
                
                //Set object values
                $member_id = $this->memberProfile['userId'];
                $portfolio_data = $this->input->post();
                
                $portfolio_id = $this->portfolio_model->add_new_portfolio($member_id, $portfolio_data);

                if ($portfolio_data['portfolio_type'] == 2) {
                    $this->portfolio_model->update_advisor_for_portfolio($portfolio_id, $portfolio_data['provider_401K']);
                    $redirectUri = 'member/accounts';
                } else
                if ($this->input->post('portfolio_type') == 1) {
                    //Save Advisor Details
                    $financial_advisor_id = $this->portfolio_model->add_financial_advisor($portfolio_data);

                    //Update Porfolio Table to Store Advisor
                    $this->portfolio_model->update_advisor_for_portfolio($portfolio_id, $financial_advisor_id);

                    $this->session->set_userdata('portfolio_id', $portfolio_id);

                    $redirectUri = 'member/portfolio/asset-allocation-model';
                }
                $this->session->set_flashdata('message', 'Account added successfully.');

                redirect($redirectUri);
            }
        }
        $data['portfolio_type'] = ($this->input->post('portfolio_type') === FALSE) ? 1 : $this->input->post('portfolio_type');
        $this->template->view('portfolio/create-investment-account', $data);
    }

    public function asset_allocation_model() {
        $data = array();
        //Varify that portfolio id is saved
        //$this->session->set_userdata('portfolio_id', 25);

        $portfolio_id = $this->session->userdata('portfolio_id');
        if (!$portfolio_id) {
            redirect('member/portfolio/create-investment-account');
        }

        $data['asset_class'] = $this->get_all_asset_class();

        //Get Master_aam_category Model
        $aam_category = $this->doctrine->em->getRepository('Entities\GmaMasterAamCategory');
        $data['default_aam_model'] = $aam_category->findAll();

        //if form is submiited then save the data
        if ($this->input->post()) {
            $this->form_validation->set_rules('start_date', 'Start Date', 'trim|required');
            $this->form_validation->set_rules('end_date', 'End Date', 'trim|required');

            if ($this->form_validation->run() === TRUE) {
                $this->load->model('portfolio_model');
                
            }
        }
        $this->template->view('portfolio/asset-allocation-model', $data);
    }
    
    public function get_all_asset_class()
    {
        $asset_class = '';
        //Get the asset classes
        $asset_classes = $this->doctrine->em->getRepository('Entities\GmaAssetClasses');
        $asset_classes = $asset_classes->findAll();
        
        foreach ($asset_classes as $assetClass) {
            $asset_class .= '<option value="' . $assetClass->getClassId() . '">' . $assetClass->getClassLabel() . '</option>';
        }
        if($this->input->is_ajax_request()){
             $data = array('asset_class'=>$asset_class);
             $this->output
                    ->set_content_type('application/json')
                    ->set_output(json_encode($data));
        }
        return $asset_class;
    }
    
    public function add_asset_allocation_model()
    {
        //Prepare array of aam detail
        $aam_detail = array();
        $aam_detail['start_date'] = $this->input->get('start_date');
        $aam_detail['end_date'] = $this->input->get('end_date');
        $portfolio_id = $this->session->userdata('portfolio_id');
        
        //Preparte the asset_allocation data
        $aam_data = array();
        $asset_percents = $this->input->get('asset_percent');
        $asset_classes = $this->input->get('asset_class');
        
        foreach ($asset_classes as $key=>$class)
        {
            if(array_key_exists($class, $aam_data)){
                $data = (int)$aam_data[$class]+(int)$asset_percents[$key];
                $aam_data[$class] = $data;
            }else{
                $aam_data[$class] = (int)$asset_percents[$key];
            }
        }
        
        $this->load->model('aam_model');
        $existing_aam = $this->aam_model->get_aam_with_date($portfolio_id, $aam_detail);
        
        //If there is not an aam already added for given interval then add.
        if(count($existing_aam)>0){
            $result['result'] = FALSE;
            $result['message'] = 'An asset allocation model is aleady added for this dates.';
        }else{
            $aam_id = $this->aam_model->add_aam_model($portfolio_id, $aam_detail);
            $result['result'] = TRUE;
            $result['message'] = 'Asset Allocation model added successfully.';
            $result['aam_id'] = $aam_id;
        }
        $this->output->set_content_type('application/json')->set_output(json_encode($result));
    }
    
}