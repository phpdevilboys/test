<?php if ( !defined('BASEPATH') ) exit('No direct access allowed.');

/**
 * GMA
 * This controller is used to varify user email.
 * 
 * @author CDN Solutions
 * @link http://cdnsol.com
 *
 */

class Activate extends Public_Controller
{
	public function __construct() 
	{
		parent :: __construct();
	}

	public function index()
	{
		redirect(site_url('member/register'));
	}

	public function mail()
	{
		$uri_array = $this->uri->segment_array();
		$token = $uri_array[sizeof($uri_array)];
		$user_id = $uri_array[sizeof($uri_array)-1];

		//Check the auth token

		$user_auth = $this->doctrine->em->getRepository('Entities\GmaUserAuthTemp');
		//$user_auth->findOneBy(array('userId'=>$user_id,'authToken'=>$token));

    	if($user_auth->findOneBy(array('userId'=>$user_id,'authToken'=>$token))!==NULL){
			
			$user = $this->doctrine->em->getRepository('Entities\GmaUser');
			
			$gmaUser = $user->findOneBy(array('userId'=>$user_id));
			$gmaUser->setIsEmailVarified('true');
			$gmaUser->setIsActive('true');
			$this->doctrine->em->persist($gmaUser);
        	$this->doctrine->em->flush();
        	
			//Remove the auth token
			$auth = $this->doctrine->em->find('Entities\GmaUserAuthTemp', array('userId'=>$user_id,'authToken'=>$token));
			$this->doctrine->em->remove($auth);
			$this->doctrine->em->flush();

			$this->session->set_flashdata('message', 'Your email id is validate successfully.');
		}else{
			$this->session->set_flashdata('error', 'The link is not valid. Please contact support.');
		}
		redirect(site_url().'/member/login');
	}
}