<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\ContentFields
 *
 * @ORM\Table(name="content_fields")
 * @ORM\Entity
 */
class ContentFields
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="content_fields_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var integer $contentTypeId
     *
     * @ORM\Column(name="content_type_id", type="integer", nullable=false)
     */
    private $contentTypeId;

    /**
     * @var integer $contentFieldTypeId
     *
     * @ORM\Column(name="content_field_type_id", type="integer", nullable=false)
     */
    private $contentFieldTypeId;

    /**
     * @var string $label
     *
     * @ORM\Column(name="label", type="string", length=50, nullable=false)
     */
    private $label;

    /**
     * @var string $shortTag
     *
     * @ORM\Column(name="short_tag", type="string", length=50, nullable=false)
     */
    private $shortTag;

    /**
     * @var smallint $required
     *
     * @ORM\Column(name="required", type="smallint", nullable=false)
     */
    private $required;

    /**
     * @var text $options
     *
     * @ORM\Column(name="options", type="text", nullable=true)
     */
    private $options;

    /**
     * @var text $settings
     *
     * @ORM\Column(name="settings", type="text", nullable=true)
     */
    private $settings;

    /**
     * @var integer $sort
     *
     * @ORM\Column(name="sort", type="integer", nullable=true)
     */
    private $sort;


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
     * Set contentTypeId
     *
     * @param integer $contentTypeId
     * @return ContentFields
     */
    public function setContentTypeId($contentTypeId)
    {
        $this->contentTypeId = $contentTypeId;
        return $this;
    }

    /**
     * Get contentTypeId
     *
     * @return integer 
     */
    public function getContentTypeId()
    {
        return $this->contentTypeId;
    }

    /**
     * Set contentFieldTypeId
     *
     * @param integer $contentFieldTypeId
     * @return ContentFields
     */
    public function setContentFieldTypeId($contentFieldTypeId)
    {
        $this->contentFieldTypeId = $contentFieldTypeId;
        return $this;
    }

    /**
     * Get contentFieldTypeId
     *
     * @return integer 
     */
    public function getContentFieldTypeId()
    {
        return $this->contentFieldTypeId;
    }

    /**
     * Set label
     *
     * @param string $label
     * @return ContentFields
     */
    public function setLabel($label)
    {
        $this->label = $label;
        return $this;
    }

    /**
     * Get label
     *
     * @return string 
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set shortTag
     *
     * @param string $shortTag
     * @return ContentFields
     */
    public function setShortTag($shortTag)
    {
        $this->shortTag = $shortTag;
        return $this;
    }

    /**
     * Get shortTag
     *
     * @return string 
     */
    public function getShortTag()
    {
        return $this->shortTag;
    }

    /**
     * Set required
     *
     * @param smallint $required
     * @return ContentFields
     */
    public function setRequired($required)
    {
        $this->required = $required;
        return $this;
    }

    /**
     * Get required
     *
     * @return smallint 
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Set options
     *
     * @param text $options
     * @return ContentFields
     */
    public function setOptions($options)
    {
        $this->options = $options;
        return $this;
    }

    /**
     * Get options
     *
     * @return text 
     */
    public function getOptions()
    {
        return $this->options;
    }

    /**
     * Set settings
     *
     * @param text $settings
     * @return ContentFields
     */
    public function setSettings($settings)
    {
        $this->settings = $settings;
        return $this;
    }

    /**
     * Get settings
     *
     * @return text 
     */
    public function getSettings()
    {
        return $this->settings;
    }

    /**
     * Set sort
     *
     * @param integer $sort
     * @return ContentFields
     */
    public function setSort($sort)
    {
        $this->sort = $sort;
        return $this;
    }

    /**
     * Get sort
     *
     * @return integer 
     */
    public function getSort()
    {
        return $this->sort;
    }
}