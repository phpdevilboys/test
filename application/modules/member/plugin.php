<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * GMA
 *
 * @author      CDN Solutions
 * @link        http://cdnsol.com
 */

class Member_plugin extends Plugin
{
    public function site_name()
    {
        $CI =& get_instance();
        return $CI->settings->site_name;
    }

    public function is_logged_in()
    {
    	return $this->session->userdata('is_logged_in');
    }
    
    //Check user entered full profile details or not
    public function is_profile_complete()
    {
    	$result = TRUE;
    	$member_detail = $this->session->userdata('member_detail');        
        if($member_detail['isCompleteProfile']==='f' || $member_detail['isCompleteProfile']===FALSE){
    		$result = FALSE;
    	}
    	return $result;
    }
}
