<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\GmaFinancialAdvisor
 *
 * @ORM\Table(name="gma_financial_advisor")
 * @ORM\Entity
 */
class GmaFinancialAdvisor
{
    /**
     * @var integer $advisorDetailsId
     *
     * @ORM\Column(name="advisor_details_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gma_financial_advisor_advisor_details_id_seq", allocationSize="1", initialValue="1")
     */
    private $advisorDetailsId;

    /**
     * @var string $financialAdvisorName
     *
     * @ORM\Column(name="financial_advisor_name", type="string", length=200, nullable=false)
     */
    private $financialAdvisorName;

    /**
     * @var string $firmName
     *
     * @ORM\Column(name="firm_name", type="string", length=45, nullable=true)
     */
    private $firmName;

    /**
     * @var string $financialAdvisorCrdno
     *
     * @ORM\Column(name="financial_advisor_crdno", type="string", length=50, nullable=true)
     */
    private $financialAdvisorCrdno;

    /**
     * @var string $financialAdvisorEmailid
     *
     * @ORM\Column(name="financial_advisor_emailid", type="string", length=150, nullable=true)
     */
    private $financialAdvisorEmailid;

    /**
     * @var string $financialAdvisorCity
     *
     * @ORM\Column(name="financial_advisor_city", type="string", length=100, nullable=true)
     */
    private $financialAdvisorCity;

    /**
     * @var string $financialAdvisorState
     *
     * @ORM\Column(name="financial_advisor_state", type="string", length=100, nullable=true)
     */
    private $financialAdvisorState;

    /**
     * @var integer $portfolioId
     *
     * @ORM\Column(name="portfolio_id", type="integer", nullable=true)
     */
    private $portfolioId;


    /**
     * Get advisorDetailsId
     *
     * @return integer 
     */
    public function getAdvisorDetailsId()
    {
        return $this->advisorDetailsId;
    }

    /**
     * Set financialAdvisorName
     *
     * @param string $financialAdvisorName
     * @return GmaFinancialAdvisor
     */
    public function setFinancialAdvisorName($financialAdvisorName)
    {
        $this->financialAdvisorName = $financialAdvisorName;
        return $this;
    }

    /**
     * Get financialAdvisorName
     *
     * @return string 
     */
    public function getFinancialAdvisorName()
    {
        return $this->financialAdvisorName;
    }

    /**
     * Set firmName
     *
     * @param string $firmName
     * @return GmaFinancialAdvisor
     */
    public function setFirmName($firmName)
    {
        $this->firmName = $firmName;
        return $this;
    }

    /**
     * Get firmName
     *
     * @return string 
     */
    public function getFirmName()
    {
        return $this->firmName;
    }

    /**
     * Set financialAdvisorCrdno
     *
     * @param string $financialAdvisorCrdno
     * @return GmaFinancialAdvisor
     */
    public function setFinancialAdvisorCrdno($financialAdvisorCrdno)
    {
        $this->financialAdvisorCrdno = $financialAdvisorCrdno;
        return $this;
    }

    /**
     * Get financialAdvisorCrdno
     *
     * @return string 
     */
    public function getFinancialAdvisorCrdno()
    {
        return $this->financialAdvisorCrdno;
    }

    /**
     * Set financialAdvisorEmailid
     *
     * @param string $financialAdvisorEmailid
     * @return GmaFinancialAdvisor
     */
    public function setFinancialAdvisorEmailid($financialAdvisorEmailid)
    {
        $this->financialAdvisorEmailid = $financialAdvisorEmailid;
        return $this;
    }

    /**
     * Get financialAdvisorEmailid
     *
     * @return string 
     */
    public function getFinancialAdvisorEmailid()
    {
        return $this->financialAdvisorEmailid;
    }

    /**
     * Set financialAdvisorCity
     *
     * @param string $financialAdvisorCity
     * @return GmaFinancialAdvisor
     */
    public function setFinancialAdvisorCity($financialAdvisorCity)
    {
        $this->financialAdvisorCity = $financialAdvisorCity;
        return $this;
    }

    /**
     * Get financialAdvisorCity
     *
     * @return string 
     */
    public function getFinancialAdvisorCity()
    {
        return $this->financialAdvisorCity;
    }

    /**
     * Set financialAdvisorState
     *
     * @param string $financialAdvisorState
     * @return GmaFinancialAdvisor
     */
    public function setFinancialAdvisorState($financialAdvisorState)
    {
        $this->financialAdvisorState = $financialAdvisorState;
        return $this;
    }

    /**
     * Get financialAdvisorState
     *
     * @return string 
     */
    public function getFinancialAdvisorState()
    {
        return $this->financialAdvisorState;
    }

    /**
     * Set portfolioId
     *
     * @param integer $portfolioId
     * @return GmaFinancialAdvisor
     */
    public function setPortfolioId($portfolioId)
    {
        $this->portfolioId = $portfolioId;
        return $this;
    }

    /**
     * Get portfolioId
     *
     * @return integer 
     */
    public function getPortfolioId()
    {
        return $this->portfolioId;
    }
}