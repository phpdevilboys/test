<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\GmaAssetAllocation
 *
 * @ORM\Table(name="gma_asset_allocation")
 * @ORM\Entity
 */
class GmaAssetAllocation
{
    /**
     * @var integer $assetAllocationId
     *
     * @ORM\Column(name="asset_allocation_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gma_asset_allocation_asset_allocation_id_seq", allocationSize="1", initialValue="1")
     */
    private $assetAllocationId;

    /**
     * @var date $startDate
     *
     * @ORM\Column(name="start_date", type="date", nullable=true)
     */
    private $startDate;

    /**
     * @var date $endDate
     *
     * @ORM\Column(name="end_date", type="date", nullable=true)
     */
    private $endDate;

    /**
     * @var datetime $createdDate
     *
     * @ORM\Column(name="created_date", type="datetime", nullable=true)
     */
    private $createdDate;

    /**
     * @var Entities\GmaPortfolio
     *
     * @ORM\ManyToOne(targetEntity="Entities\GmaPortfolio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="portfolio_id", referencedColumnName="portfolio_id")
     * })
     */
    private $portfolio;


    /**
     * Get assetAllocationId
     *
     * @return integer 
     */
    public function getAssetAllocationId()
    {
        return $this->assetAllocationId;
    }

    /**
     * Set startDate
     *
     * @param date $startDate
     * @return GmaAssetAllocation
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
        return $this;
    }

    /**
     * Get startDate
     *
     * @return date 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param date $endDate
     * @return GmaAssetAllocation
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
        return $this;
    }

    /**
     * Get endDate
     *
     * @return date 
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set createdDate
     *
     * @param datetime $createdDate
     * @return GmaAssetAllocation
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;
        return $this;
    }

    /**
     * Get createdDate
     *
     * @return datetime 
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Set portfolio
     *
     * @param Entities\GmaPortfolio $portfolio
     * @return GmaAssetAllocation
     */
    public function setPortfolio(\Entities\GmaPortfolio $portfolio = null)
    {
        $this->portfolio = $portfolio;
        return $this;
    }

    /**
     * Get portfolio
     *
     * @return Entities\GmaPortfolio 
     */
    public function getPortfolio()
    {
        return $this->portfolio;
    }
}