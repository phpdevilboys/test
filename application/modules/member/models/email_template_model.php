<?php (defined('BASEPATH')) OR exit('No direct script access allowed');
/**
 * GMA
 *
 * @author      CDN Solutions
 * @link        http://cdnsol.com
 */

class Email_template_model extends CI_Model{
    private $CI;
    
    public function __construct() {
        $this->CI =& get_instance();
    }
    
    public function get_template($module, $default=1){
        $CI = $this->CI;
        $qb = $CI->doctrine->em->createQueryBuilder();
        $qb->select( 'mes' )
            ->from( 'Entities\GmaEmailTemplates', 'mes' )
            ->where('mes.isDefault = :default')
            ->andWhere( 'mes.module = :no' )
            ->setParameter( 'default', $default )
            ->setParameter( 'no', $module );
        $mail_detail = $qb->getQuery()->getArrayResult();
        
        if(!empty($mail_detail))
            $mail_detail = $mail_detail[0];
        return $mail_detail;
    }
}