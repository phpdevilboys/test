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
                $user = $this->doctrine->em->getReference('Entities\GmaUser', $this->memberProfile['userId']);
                $portfolio = new Entities\GmaPortfolio;
                $portfolio->setPortfolioName($this->input->post('portfolio_name'));
                $portfolio->setPortfolioTypeId($this->input->post('portfolio_type'));
                $portfolio->setUser($user);
                $portfolio->setCreatedDate(NEW DateTime());
                $this->doctrine->em->persist($portfolio);
                $this->doctrine->em->flush();

                //$portfolio = $this->portfolio_model->where('portfolio_id', $this->portfolio_model->id)->get();

                if ($this->input->post('portfolio_type') == 2) {
                    $portfolio->setAdvisorDetailsId($this->input->post('provider_401K'));
                    $this->doctrine->em->persist($portfolio);
                    $this->doctrine->em->flush();

                    $redirectUri = 'member/accounts';
                } else
                if ($this->input->post('portfolio_type') == 1) {
                    //Save Advisor Details
                    $financial_advisor = new Entities\GmaFinancialAdvisor;
                    $financial_advisor->setFinancialAdvisorName($this->input->post('financial_advisor_name'));
                    $financial_advisor->setFirmName($this->input->post('firm_name'));
                    $financial_advisor->setFinancialAdvisorCrdno($this->input->post('financial_advisor_crdno'));
                    $financial_advisor->setFinancialAdvisorEmailid($this->input->post('financial_advisor_emailid'));
                    $financial_advisor->setFinancialAdvisorCity($this->input->post('financial_advisor_city'));
                    $financial_advisor->setFinancialAdvisorState($this->input->post('financial_advisor_state'));
                    $this->doctrine->em->persist($financial_advisor);
                    $this->doctrine->em->flush();

                    //Update Porfolio Table to Store Advisor
                    $portfolio->setAdvisorDetailsId($financial_advisor->getAdvisorDetailsId());
                    $this->doctrine->em->persist($portfolio);
                    $this->doctrine->em->flush();

                    $this->session->set_userdata('portfolio_id', $portfolio->getPortfolioId());

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
        
        //Get the asset classes
        $asset_classes = $this->doctrine->em->getRepository('Entities\GmaAssetClasses');
        $asset_classes = $asset_classes->findAll();

        $asset_class = '';
        foreach ($asset_classes as $assetClass) {
            $asset_class .= '<option value="' . $assetClass->getClassId() . '">' . $assetClass->getClassLabel() . '</option>';
        }

        $data['asset_class'] = $asset_class;

        //Get Master_aam_category Model
        $aam_category = $this->doctrine->em->getRepository('Entities\GmaMasterAamCategory');
        $data['default_aam_model'] = $aam_category->findAll();

        //if form is submiited then save the data
        if ($this->input->post()) {
            $this->form_validation->set_rules('start_date', 'Start Date', 'trim|required');
            $this->form_validation->set_rules('end_date', 'End Date', 'trim|required');

            if ($this->form_validation->run() === TRUE) {
                $this->load->model('portfolio_model');

                //If choose GMA's defined Model
                if ($this->input->post('default_aam') == 1) {
                    $this->portfolio_model
                            ->where('portfolio_id', $portfolio_id)
                            ->update('default_asset', 1);
                    $this->load->model('default_asset_allocation_model');
                    $this->default_asset_allocation_model->start_date = $this->input->post('start_date');
                    $this->default_asset_allocation_model->end_date = $this->input->post('end_date');
                    $this->default_asset_allocation_model->aam_cat_id = $this->input->post('aam_default_model');
                    $this->default_asset_allocation_model->created_date = date('Y-m-d');
                    $this->default_asset_allocation_model->portfolio_id = $portfolio_id;
                    $this->default_asset_allocation_model->save();
                } else {
                    $this->portfolio_model
                            ->where('portfolio_id', $portfolio_id)
                            ->update('user_define_asset', 1);

                    $this->load->model('asset_allocation_model');
                    $this->asset_allocation_model->start_date = $this->input->post('start_date');
                    $this->asset_allocation_model->end_date = $this->input->post('end_date');
                    $this->asset_allocation_model->created_date = date('Y-m-d');
                    $this->asset_allocation_model->portfolio_id = $portfolio_id;
                    $this->asset_allocation_model->save();
                    $asset_allocation_id = $this->asset_allocation_model->id;

                    //Save asset percentages
                    $this->load->model('asset_allocation_details_model');
                    $aam_details = new Asset_allocation_details_model();

                    $asset_percent = $this->input->post('asset_percent');
                    $asset_class = $this->input->post('asset_class');
                    $query = 'Insert into ' . $aam_details->table . ' (asset_percentage, class_id, asset_allocation_id) VALUES';
                    for ($count = 0; $count < count($asset_percent); $count++) {
                        if ($asset_percent[$count] == "") {
                            break;
                        }
                        $query .= "('" . $asset_percent[$count] . "', '" . $asset_class[$count] . "', '" . $asset_allocation_id . "'),";
                    }
                    $query = trim($query, ',') . ';';
                    $result = $this->db->query($query);
                    var_dump($result);
                    die;
                }
            }
        }
        $this->template->view('portfolio/asset-allocation-model', $data);
    }

}