<?php defined('BASEPATH') or die('No direct access to script allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Aam_model extends CI_Model
{
    private $CI;
    
    public function __construct() {
        $this->CI =& get_instance();
    }
    
    /**
     * 
     * @param int $portfolio_id
     * @param array $aam_detail
     * @return int
     */
    public function add_aam_model($portfolio_id, $aam_detail)
    {
        if(is_array($aam_detail)===FALSE)
            return FALSE;
        
        
        $portfolio = $this->CI->doctrine->em->getReference('Entities\GmaPortfolio', $portfolio_id);
        $aam = new Entities\GmaAssetAllocation;
        $aam->setStartDate(new DateTime(date('Y-m-d', strtotime($aam_detail['start_date']))));
        $aam->setEndDate(new DateTime(date('Y-m-d', strtotime($aam_detail['end_date']))));
        $aam->setPortfolio($portfolio);
        $aam->setCreatedDate(new DateTime());        
        $this->CI->doctrine->em->persist($aam);
        $this->CI->doctrine->em->flush();
        return $aam->getAssetAllocationId();
    }
    
    /**
     * 
     * @param int $portfolio_id
     * @param array $aam_detail
     * @return array
     */
    public function get_aam_with_date($portfolio_id, $aam_detail)
    {
        $portfolio  = $this->CI->doctrine->em->getReference('Entities\GmaPortfolio', $portfolio_id);
        $start_date = new DateTime(date('Y-m-d', strtotime($aam_detail['start_date'])));
        $end_date   = new DateTime(date('Y-m-d', strtotime($aam_detail['end_date'])));
                
        $qb = $this->CI->doctrine->em->createQueryBuilder();
        $qb->select( 'aam' )
            ->from( 'Entities\GmaAssetAllocation', 'aam' )
            ->where($qb->expr()->eq('aam.portfolio', '?1'))
            ->andWhere($qb->expr()->andX(
                        $qb->expr()->eq('aam.startDate', '?2'),
                        $qb->expr()->eq('aam.endDate', '?3')
                    ))
            ->setParameter( 2, $start_date )
            ->setParameter( 3, $end_date )
            ->setParameter( 1, $portfolio )
            ;
        $portfolio_detail = $qb->getQuery()->getArrayResult();
        
        return $portfolio_detail;
    }
}
