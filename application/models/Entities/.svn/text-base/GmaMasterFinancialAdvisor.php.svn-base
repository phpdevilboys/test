<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\GmaMasterFinancialAdvisor
 *
 * @ORM\Table(name="gma_master_financial_advisor")
 * @ORM\Entity
 */
class GmaMasterFinancialAdvisor
{
    /**
     * @var integer $financialAdvisorId
     *
     * @ORM\Column(name="financial_advisor_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gma_master_financial_advisor_financial_advisor_id_seq", allocationSize="1", initialValue="1")
     */
    private $financialAdvisorId;

    /**
     * @var string $financialAdvisorName
     *
     * @ORM\Column(name="financial_advisor_name", type="string", length=200, nullable=true)
     */
    private $financialAdvisorName;

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
     * @var integer $firmId
     *
     * @ORM\Column(name="firm_id", type="integer", nullable=true)
     */
    private $firmId;


    /**
     * Get financialAdvisorId
     *
     * @return integer 
     */
    public function getFinancialAdvisorId()
    {
        return $this->financialAdvisorId;
    }

    /**
     * Set financialAdvisorName
     *
     * @param string $financialAdvisorName
     * @return GmaMasterFinancialAdvisor
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
     * Set financialAdvisorCrdno
     *
     * @param string $financialAdvisorCrdno
     * @return GmaMasterFinancialAdvisor
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
     * @return GmaMasterFinancialAdvisor
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
     * @return GmaMasterFinancialAdvisor
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
     * @return GmaMasterFinancialAdvisor
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
     * Set firmId
     *
     * @param integer $firmId
     * @return GmaMasterFinancialAdvisor
     */
    public function setFirmId($firmId)
    {
        $this->firmId = $firmId;
        return $this;
    }

    /**
     * Get firmId
     *
     * @return integer 
     */
    public function getFirmId()
    {
        return $this->firmId;
    }
}