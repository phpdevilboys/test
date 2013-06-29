<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\GmaAssetAllocationDetails
 *
 * @ORM\Table(name="gma_asset_allocation_details")
 * @ORM\Entity
 */
class GmaAssetAllocationDetails
{
    /**
     * @var integer $assetAllocationDetailId
     *
     * @ORM\Column(name="asset_allocation_detail_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gma_asset_allocation_details_asset_allocation_detail_id_seq", allocationSize="1", initialValue="1")
     */
    private $assetAllocationDetailId;

    /**
     * @var float $assetPercentage
     *
     * @ORM\Column(name="asset_percentage", type="float", nullable=true)
     */
    private $assetPercentage;

    /**
     * @var string $classId
     *
     * @ORM\Column(name="class_id", type="string", length=45, nullable=true)
     */
    private $classId;

    /**
     * @var Entities\GmaAssetAllocation
     *
     * @ORM\ManyToOne(targetEntity="Entities\GmaAssetAllocation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="asset_allocation_id", referencedColumnName="asset_allocation_id")
     * })
     */
    private $assetAllocation;


    /**
     * Get assetAllocationDetailId
     *
     * @return integer 
     */
    public function getAssetAllocationDetailId()
    {
        return $this->assetAllocationDetailId;
    }

    /**
     * Set assetPercentage
     *
     * @param float $assetPercentage
     * @return GmaAssetAllocationDetails
     */
    public function setAssetPercentage($assetPercentage)
    {
        $this->assetPercentage = $assetPercentage;
        return $this;
    }

    /**
     * Get assetPercentage
     *
     * @return float 
     */
    public function getAssetPercentage()
    {
        return $this->assetPercentage;
    }

    /**
     * Set classId
     *
     * @param string $classId
     * @return GmaAssetAllocationDetails
     */
    public function setClassId($classId)
    {
        $this->classId = $classId;
        return $this;
    }

    /**
     * Get classId
     *
     * @return string 
     */
    public function getClassId()
    {
        return $this->classId;
    }

    /**
     * Set assetAllocation
     *
     * @param Entities\GmaAssetAllocation $assetAllocation
     * @return GmaAssetAllocationDetails
     */
    public function setAssetAllocation(\Entities\GmaAssetAllocation $assetAllocation = null)
    {
        $this->assetAllocation = $assetAllocation;
        return $this;
    }

    /**
     * Get assetAllocation
     *
     * @return Entities\GmaAssetAllocation 
     */
    public function getAssetAllocation()
    {
        return $this->assetAllocation;
    }
}