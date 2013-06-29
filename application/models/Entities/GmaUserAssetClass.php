<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\GmaUserAssetClass
 *
 * @ORM\Table(name="gma_user_asset_class")
 * @ORM\Entity
 */
class GmaUserAssetClass
{
    /**
     * @var integer $gmaUserAssetClassId
     *
     * @ORM\Column(name="gma_user_asset_class_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gma_user_asset_class_gma_user_asset_class_id_seq", allocationSize="1", initialValue="1")
     */
    private $gmaUserAssetClassId;

    /**
     * @var string $classLabel
     *
     * @ORM\Column(name="class_label", type="string", length=225, nullable=false)
     */
    private $classLabel;

    /**
     * @var datetime $createdDate
     *
     * @ORM\Column(name="created_date", type="datetime", nullable=false)
     */
    private $createdDate;


    /**
     * Get gmaUserAssetClassId
     *
     * @return integer 
     */
    public function getGmaUserAssetClassId()
    {
        return $this->gmaUserAssetClassId;
    }

    /**
     * Set classLabel
     *
     * @param string $classLabel
     * @return GmaUserAssetClass
     */
    public function setClassLabel($classLabel)
    {
        $this->classLabel = $classLabel;
        return $this;
    }

    /**
     * Get classLabel
     *
     * @return string 
     */
    public function getClassLabel()
    {
        return $this->classLabel;
    }

    /**
     * Set createdDate
     *
     * @param datetime $createdDate
     * @return GmaUserAssetClass
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
}