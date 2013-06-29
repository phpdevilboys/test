<?php

(defined('BASEPATH')) OR exit('No direct script access allowed');

/**
 * GMA
 *
 * @author      CDN Solutions
 * @link        http://cdnsol.com
 */
class Member_model extends CI_Model {

    private $CI;

    public function __construct() {
        $this->CI = & get_instance();
    }

    /**
     * Function used to authenticate the member
     *
     * @param email $email
     * @param password $password
     * 
     * @return array()
     */
    public function authenticate($email, $password) {
        $result = array(
            'result' => FALSE,
            'message' => 'Login fails',
        );
        $CI = $this->CI;
        $CI->load->helper('security');

        $Login_result = $CI->doctrine->em->getRepository('Entities\GmaUser');

        $User = $Login_result->findOneBy(array(
            "emailId" => $email,
            "password" => md5($CI->config->item('encryption_key') . $password)
                )
        );
        if (is_object($User) && is_int($User->getUserId())) {
            $result = array(
                'result' => TRUE,
                'message' => 'Login Success',
                'member_detail' => clone $User,
            );
        }
        return $result;
    }

    /**
     * Return details of member
     * @param int $member_id
     * @return array
     */
    public function member_detail($member_id) {
        $CI = $this->CI;
        $qb = $CI->doctrine->em->createQueryBuilder();
        $qb->select('mes')
                ->from('Entities\GmaUser', 'mes')
                ->andWhere('mes.userId = :no')
                ->setParameter('no', $member_id);
        $member_detail = $qb->getQuery()->getArrayResult();

        if (!empty($member_detail))
            $member_detail = $member_detail[0];
        return $member_detail;
    }

    /**
     *  Add new Member
     */
    public function add_new_member($member_detail = array()) {
        if (empty($member_detail))
            return FALSE;

        //load Entity
        $member = new Entities\GmaUser;
        $member->setEmailId($member_detail['email']);
        $member->setPassword(md5($this->config->item('encryption_key') . $member_detail['password']));
        $member->setIsReceiveMail('true');
        $member->setCreatedDate(new DateTime());
        $this->CI->doctrine->em->persist($member);
        $this->CI->doctrine->em->flush();

        return $member;
    }

    /**
     * Update member details
     */
    public function update_member_profile($member_id, $member_detail = array()) {
        if (is_int($member_id) === FALSE)
            return FALSE;

        $member_obj = $this->CI->doctrine->em->getRepository('Entities\GmaUser');
        $member = $member_obj->findOneBy(array('userId' => $member_id));

        $member->setTitle($member_detail['title']);
        $member->setFirstName($member_detail['first_name']);
        $member->setLastName($member_detail['last_name']);
        $member->setMobileNum($member_detail['mobile_num']);
        $member->setSecEmailId($member_detail['sec_email_id']);
        $member->setSuffix($member_detail['suffix']);
        $member->setGender($member_detail['gender']);
        $member->setAddressLine1($member_detail['address_line_1']);
        $member->setAddressLine2($member_detail['address_line_2']);
        $member->setCity($member_detail['city']);
        $member->setState($member_detail['state']);
        $member->setZipCode($member_detail['zip_code']);
        $member->setSecurityQues1($member_detail['security_ques_1']);
        $member->setSecurityAns1($member_detail['security_ans_1']);
        $member->setSecurityQues2($member_detail['security_ques_2']);
        $member->setSecurityAns2($member_detail['security_ans_2']);
        $member->setDateOfBirth($member_detail['date_of_birth']);
        $member->setIsCompleteProfile(TRUE);
        $this->CI->doctrine->em->persist($member);
        $this->CI->doctrine->em->flush();
        return $member;
    }

    public function get_all_member($first_result = 0, $max_result = NULL) {
        $CI = $this->CI;
        $qb = $CI->doctrine->em->createQueryBuilder();
        $qb->select('mes')
                ->from('Entities\GmaUser', 'mes')
                ->orderBy('mes.userId', 'DESC');
        if ($max_result !== NULL)
            $qb->setFirstResult($first_result);
        $qb->setMaxResults($max_result);

        $member_detail = $qb->getQuery()->getResult();
        return $member_detail;
        /*
          $user = $this->CI->doctrine->em->getRepository('Entities\GmaUser');
          return $user->findAll();
         */
    }

    /**
     * 
     * @param int $member_id
     * @param boolean $isActive
     * @return object
     */
    public function change_active_status($member_id, $isActive) {
        $member_obj = $this->CI->doctrine->em->getRepository('Entities\GmaUser');
        $member = $member_obj->findOneBy(array('userId' => $member_id));
        $member->setIsActive($isActive);
        $this->CI->doctrine->em->persist($member);
        $this->CI->doctrine->em->flush();
        return $member;
    }

    /**
     * This function will return all sequrity questions
     * 
     * @return object
     */
    public function get_security_question() {
        $sec_question = $this->doctrine->em->getRepository('Entities\GmaMasterSecurityQuestion');
        return $sec_question->findAll();
    }

    /**
     * Update user password
     * @param int $member_id
     * @param string $password
     * @return int
     */
    public function update_password($member_id, $password) {
        $member_obj = $this->CI->doctrine->em->getRepository('Entities\GmaUser');
        $member = $member_obj->findOneBy(array('userId' => $member_id));
        $member->setPassword((md5($this->config->item('encryption_key') . $password)));
        $this->CI->doctrine->em->persist($member);
        $this->CI->doctrine->em->flush();
        return $member->getUserId();
    }

    /**
     * Update personal details
     * 
     * @param int $member_id
     * @param array $member_details
     * @return int
     */
    
    public function update_personal_details($member_id, $member_details) {
        $member_obj = $this->CI->doctrine->em->getRepository('Entities\GmaUser');
        $member = $member_obj->findOneBy(array('userId' => $member_id));
		
        switch ($member_details['fromwhere']){
			case 'security':
			  
			  $member->setSecurityQues1($member_details['security_ques_1']);
			  $member->setSecurityAns1($member_details['security_ans_1']);
			  $member->setSecurityQues2($member_details['security_ques_2']);
			  $member->setSecurityAns2($member_details['security_ans_2']);
			  
			break;
			case 'alternate_info':
			
			  if (isset($member_details['address_line_1']))
				$member->setAddressLine1($member_details['address_line_1']);

			  if (isset($member_details['address_line_2']))
				$member->setAddressLine2($member_details['address_line_2']);

			  $member->setCity($member_details['city']);  
			  $member->setState($member_details['state']);        
			  $member->setZipCode($member_details['zip_code']); 
				
			break;
			case 'contact_info':				
			
				$member->setSecEmailId($member_details['sec_email_id']);       
				$member->setSecMobileNum($member_details['sec_mobile_num']);
				
			break;
			default:
			
				$member->setTitle($member_details['title']);
				$member->setFirstName($member_details['first_name']);
				$member->setLastName($member_details['last_name']);
				$member->setMobileNum($member_details['mobile_num']);
				$member->setSuffix($member_details['suffix']);
				$member->setDateOfBirth($member_details['date_of_birth']);
				
			break;
		}
				
        $this->CI->doctrine->em->persist($member);
        $this->CI->doctrine->em->flush();
        return $member->getUserId();
    }

}
