<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\Galleries
 *
 * @ORM\Table(name="galleries")
 * @ORM\Entity
 */
class Galleries
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="galleries_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=100, nullable=false)
     */
    private $title;

    /**
     * @var smallint $resize
     *
     * @ORM\Column(name="resize", type="smallint", nullable=false)
     */
    private $resize;

    /**
     * @var integer $imageWidth
     *
     * @ORM\Column(name="image_width", type="integer", nullable=true)
     */
    private $imageWidth;

    /**
     * @var integer $imageHeight
     *
     * @ORM\Column(name="image_height", type="integer", nullable=true)
     */
    private $imageHeight;

    /**
     * @var smallint $imageCrop
     *
     * @ORM\Column(name="image_crop", type="smallint", nullable=true)
     */
    private $imageCrop;

    /**
     * @var text $thumbs
     *
     * @ORM\Column(name="thumbs", type="text", nullable=false)
     */
    private $thumbs;


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
     * @return Galleries
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
     * Set resize
     *
     * @param smallint $resize
     * @return Galleries
     */
    public function setResize($resize)
    {
        $this->resize = $resize;
        return $this;
    }

    /**
     * Get resize
     *
     * @return smallint 
     */
    public function getResize()
    {
        return $this->resize;
    }

    /**
     * Set imageWidth
     *
     * @param integer $imageWidth
     * @return Galleries
     */
    public function setImageWidth($imageWidth)
    {
        $this->imageWidth = $imageWidth;
        return $this;
    }

    /**
     * Get imageWidth
     *
     * @return integer 
     */
    public function getImageWidth()
    {
        return $this->imageWidth;
    }

    /**
     * Set imageHeight
     *
     * @param integer $imageHeight
     * @return Galleries
     */
    public function setImageHeight($imageHeight)
    {
        $this->imageHeight = $imageHeight;
        return $this;
    }

    /**
     * Get imageHeight
     *
     * @return integer 
     */
    public function getImageHeight()
    {
        return $this->imageHeight;
    }

    /**
     * Set imageCrop
     *
     * @param smallint $imageCrop
     * @return Galleries
     */
    public function setImageCrop($imageCrop)
    {
        $this->imageCrop = $imageCrop;
        return $this;
    }

    /**
     * Get imageCrop
     *
     * @return smallint 
     */
    public function getImageCrop()
    {
        return $this->imageCrop;
    }

    /**
     * Set thumbs
     *
     * @param text $thumbs
     * @return Galleries
     */
    public function setThumbs($thumbs)
    {
        $this->thumbs = $thumbs;
        return $this;
    }

    /**
     * Get thumbs
     *
     * @return text 
     */
    public function getThumbs()
    {
        return $this->thumbs;
    }
}