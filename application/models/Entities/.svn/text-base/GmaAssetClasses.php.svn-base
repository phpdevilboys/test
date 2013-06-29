<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\GmaAssetClasses
 *
 * @ORM\Table(name="gma_asset_classes")
 * @ORM\Entity
 */
class GmaAssetClasses
{
    /**
     * @var integer $classId
     *
     * @ORM\Column(name="class_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gma_asset_classes_class_id_seq", allocationSize="1", initialValue="1")
     */
    private $classId;

    /**
     * @var string $classLabel
     *
     * @ORM\Column(name="class_label", type="string", length=255, nullable=false)
     */
    private $classLabel;

    /**
     * @var datetime $createdAt
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;


    /**
     * Get classId
     *
     * @return integer 
     */
    public function getClassId()
    {
        return $this->classId;
    }

    /**
     * Set classLabel
     *
     * @param string $classLabel
     * @return GmaAssetClasses
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
     * Set createdAt
     *
     * @param datetime $createdAt
     * @return GmaAssetClasses
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * Get createdAt
     *
     * @return datetime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
}