<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\ContentFieldTypes
 *
 * @ORM\Table(name="content_field_types")
 * @ORM\Entity
 */
class ContentFieldTypes
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="content_field_types_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=50, nullable=false)
     */
    private $title;

    /**
     * @var string $modelName
     *
     * @ORM\Column(name="model_name", type="string", length=50, nullable=false)
     */
    private $modelName;

    /**
     * @var string $datatype
     *
     * @ORM\Column(name="datatype", type="string", length=50, nullable=false)
     */
    private $datatype;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return ContentFieldTypes
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set modelName
     *
     * @param string $modelName
     * @return ContentFieldTypes
     */
    public function setModelName($modelName)
    {
        $this->modelName = $modelName;
        return $this;
    }

    /**
     * Get modelName
     *
     * @return string 
     */
    public function getModelName()
    {
        return $this->modelName;
    }

    /**
     * Set datatype
     *
     * @param string $datatype
     * @return ContentFieldTypes
     */
    public function setDatatype($datatype)
    {
        $this->datatype = $datatype;
        return $this;
    }

    /**
     * Get datatype
     *
     * @return string 
     */
    public function getDatatype()
    {
        return $this->datatype;
    }
}