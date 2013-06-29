<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\GmaCashFlow
 *
 * @ORM\Table(name="gma_cash_flow")
 * @ORM\Entity
 */
class GmaCashFlow
{
    /**
     * @var integer $cashFlowId
     *
     * @ORM\Column(name="cash_flow_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gma_cash_flow_cash_flow_id_seq", allocationSize="1", initialValue="1")
     */
    private $cashFlowId;

    /**
     * @var datetime $cashFlowDate
     *
     * @ORM\Column(name="cash_flow_date", type="datetime", nullable=false)
     */
    private $cashFlowDate;

    /**
     * @var string $cashFlowType
     *
     * @ORM\Column(name="cash_flow_type", type="string", length=255, nullable=false)
     */
    private $cashFlowType;

    /**
     * @var float $amount
     *
     * @ORM\Column(name="amount", type="float", nullable=false)
     */
    private $amount;

    /**
     * @var integer $portfolioId
     *
     * @ORM\Column(name="portfolio_id", type="integer", nullable=false)
     */
    private $portfolioId;


    /**
     * Get cashFlowId
     *
     * @return integer 
     */
    public function getCashFlowId()
    {
        return $this->cashFlowId;
    }

    /**
     * Set cashFlowDate
     *
     * @param datetime $cashFlowDate
     * @return GmaCashFlow
     */
    public function setCashFlowDate($cashFlowDate)
    {
        $this->cashFlowDate = $cashFlowDate;
        return $this;
    }

    /**
     * Get cashFlowDate
     *
     * @return datetime 
     */
    public function getCashFlowDate()
    {
        return $this->cashFlowDate;
    }

    /**
     * Set cashFlowType
     *
     * @param string $cashFlowType
     * @return GmaCashFlow
     */
    public function setCashFlowType($cashFlowType)
    {
        $this->cashFlowType = $cashFlowType;
        return $this;
    }

    /**
     * Get cashFlowType
     *
     * @return string 
     */
    public function getCashFlowType()
    {
        return $this->cashFlowType;
    }

    /**
     * Set amount
     *
     * @param float $amount
     * @return GmaCashFlow
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Get amount
     *
     * @return float 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set portfolioId
     *
     * @param integer $portfolioId
     * @return GmaCashFlow
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