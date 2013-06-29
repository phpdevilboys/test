<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\GmaDefaultAssetAllocation
 *
 * @ORM\Table(name="gma_default_asset_allocation")
 * @ORM\Entity
 */
class GmaDefaultAssetAllocation
{
    /**
     * @var integer $defaultAssetAllocationId
     *
     * @ORM\Column(name="default_asset_allocation_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gma_default_asset_allocation_default_asset_allocation_id_seq", allocationSize="1", initialValue="1")
     */
    private $defaultAssetAllocationId;

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
     * @var integer $aamCatId
     *
     * @ORM\Column(name="aam_cat_id", type="integer", nullable=true)
     */
    private $aamCatId;

    /**
     * @var date $createdDate
     *
     * @ORM\Column(name="created_date", type="date", nullable=true)
     */
    private $createdDate;

    /**
     * @var integer $portfolioId
     *
     * @ORM\Column(name="portfolio_id", type="integer", nullable=true)
     */
    private $portfolioId;


    /**
     * Get defaultAssetAllocationId
     *
     * @return integer 
     */
    public function getDefaultAssetAllocationId()
    {
        return $this->defaultAssetAllocationId;
    }

    /**
     * Set startDate
     *
     * @param date $startDate
     * @return GmaDefaultAssetAllocation
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
     * @return GmaDefaultAssetAllocation
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
     * Set aamCatId
     *
     * @param integer $aamCatId
     * @return GmaDefaultAssetAllocation
     */
    public function setAamCatId($aamCatId)
    {
        $this->aamCatId = $aamCatId;
        return $this;
    }

    /**
     * Get aamCatId
     *
     * @return integer 
     */
    public function getAamCatId()
    {
        return $this->aamCatId;
    }

    /**
     * Set createdDate
     *
     * @param date $createdDate
     * @return GmaDefaultAssetAllocation
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;
        return $this;
    }

    /**
     * Get createdDate
     *
     * @return date 
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Set portfolioId
     *
     * @param integer $portfolioId
     * @return GmaDefaultAssetAllocation
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