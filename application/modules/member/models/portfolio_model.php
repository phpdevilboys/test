<?php (defined('BASEPATH')) OR exit('No direct script access allowed');
/**
 * GMA
 *
 * @author      CDN Solutions
 * @link        http://cdnsol.com
 */

class Portfolio_model extends CI_Model
{	
    private $CI = NULL;

    public function __construct()
    {
        $this->CI =& get_instance();
    }
   
    /**
     * 
     * @param type $member_id
     * @param type $portfolio_data
     * @return integer
     */
    public function add_new_portfolio($member_id, $portfolio_data = array())
    {
        if(empty($portfolio_data))
            return FALSE;
        
        $user = $this->CI->doctrine->em->getReference('Entities\GmaUser', $member_id);
        $portfolio = new Entities\GmaPortfolio;
        $portfolio->setPortfolioName($portfolio_data['portfolio_name']);
        $portfolio->setPortfolioTypeId($portfolio_data['portfolio_type']);
        $portfolio->setUser($user);
        $portfolio->setCreatedDate(NEW DateTime());
        $this->CI->doctrine->em->persist($portfolio);
        $this->CI->doctrine->em->flush();
        
        return $portfolio->getPortfolioId();
    }
    
    /**
     * 
     * @param integer $portfolio_id
     * @param array $portfolio_data
     * @return boolean
     */
    public function update_advisor_for_portfolio($portfolio_id, $advisor_id)
    {
        $portfolio = $this->CI->doctrine->em->getReference('Entities\GmaPortfolio', $portfolio_id);
        $portfolio->setAdvisorDetailsId($advisor_id);
        $this->CI->doctrine->em->persist($portfolio);
        $this->CI->doctrine->em->flush();
        return $portfolio->getPortfolioId();
    }
    
    /**
     * 
     * @param array $advisor_detail
     * @return int
     */
    public function add_financial_advisor($advisor_detail=array())
    {
        $financial_advisor = new Entities\GmaFinancialAdvisor;
        $financial_advisor->setFinancialAdvisorName($advisor_detail['financial_advisor_name']);
        $financial_advisor->setFirmName($advisor_detail['firm_name']);
        $financial_advisor->setFinancialAdvisorCrdno($advisor_detail['financial_advisor_crdno']);
        $financial_advisor->setFinancialAdvisorEmailid($advisor_detail['financial_advisor_emailid']);
        $financial_advisor->setFinancialAdvisorCity($advisor_detail['financial_advisor_city']);
        $financial_advisor->setFinancialAdvisorState($advisor_detail['financial_advisor_state']);
        
        $this->CI->doctrine->em->persist($financial_advisor);
        $this->CI->doctrine->em->flush();
        return $financial_advisor->getAdvisorDetailsId();
    }
    
    /**
     * This function will return all portfolio for passed
     * member id.
     * 
     * @param int $member_id
     * @return array
     */
    public function get_all_portfolio($member_id)
    {
        $CI = $this->CI;
        $qb = $CI->doctrine->em->createQueryBuilder();
        $qb->select( 'gma_portfolio' )
            ->from( 'Entities\GmaPortfolio', 'gma_portfolio' )
            ->andWhere( 'gma_portfolio.user = :no' )
            ->setParameter( 'no', $member_id )
            ->orderBy('gma_portfolio.portfolioId', 'DESC');
        $portfolio = $qb->getQuery()->getArrayResult();
        
        return $portfolio;
    }
    
    /**
     * 
     * @param string $class_name
     * @return int
     */
    public function add_new_asset_class( $class_name = NULL )
    {
        if( $class_name===NULL )
            return FALSE;
        
        $asset_class = new Entities\GmaAssetClasses;
        $asset_class->setClassLabel($class_name);
        $asset_class->setCreatedAt(new DateTime());
        $this->CI->doctrine->em->persist($asset_class);
        $this->CI->doctrine->em->flush();
        return $asset_class->getClassId();
    }
}