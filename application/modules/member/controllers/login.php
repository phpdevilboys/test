<?php (defined('BASEPATH')) OR exit('No direct script access allowed');
/**
 * GMA
 *
 * @author      CDN Solutions
 * @link        http://cdnsol.com
 */

class Login extends Public_Controller
{
    function __construct()
    {
        parent::__construct();
    }

    //Show the login page
    public function index()
    {
    	$this->template->view("login");
    }

    // Authenticate User
    public function authenticate()
	{
    	// Form Validation
        $this->form_validation->set_rules('email', 'Username', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        // Process Form
        if ( $this->form_validation->run() == FALSE ) {
            $this->session->set_flashdata( 'error', validation_errors());
            redirect('member/login');
        }
        else{
        	$this->load->model('member_model');
        	$authenticate = $this->member_model->authenticate($this->input->post('email'), $this->input->post('password'));

            if( $authenticate['result'] === TRUE ) {
                //Check email-id varified or not.
                $member_detail = $authenticate['member_detail'];

                if($member_detail->getIsEmailVarified() === 'f' || $member_detail->getIsEmailVarified() === FALSE) {
                    $this->session->set_flashdata('error', 'Your email id is not varified.<br /> Please check your mail and varify email.');
                }else if($member_detail->getIsActive() === 'f' || $member_detail->getIsActive() === FALSE || $member_detail->getIsActive() === NULL ) {
                    $this->session->set_flashdata('error', 'Your account is not activated. Please contact support.');
                }else{
                    //Save user to session
                    $this->session->set_userdata(array(
                        'is_logged_in'  => TRUE,
                        'user_id'       => $member_detail->getUserId(),
                    ));
                    $member_id = $member_detail->getUserId();
                    $this->session->set_userdata(array('member_detail' => $this->member_model->member_detail($member_id),));

                    $redirect_uri = ($member_detail->getIsCompleteProfile()=='t') ? '/member/accounts' : '/member/';
                    redirect($redirect_uri);
                }

            }else {
                $this->session->set_flashdata('error', 'You entered wrong Email Address or Password.');
            }
            redirect(site_url().'/member/login');
        }
    }
}
