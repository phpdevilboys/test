<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\GalleryImages
 *
 * @ORM\Table(name="gallery_images")
 * @ORM\Entity
 */
class GalleryImages
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gallery_images_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $filename
     *
     * @ORM\Column(name="filename", type="string", length=100, nullable=false)
     */
    private $filename;

    /**
     * @var integer $galleryId
     *
     * @ORM\Column(name="gallery_id", type="integer", nullable=false)
     */
    private $galleryId;

    /**
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=100, nullable=false)
     */
    private $title;

    /**
     * @var string $description
     *
     * @ORM\Column(name="description", type="string", length=250, nullable=false)
     */
    private $description;

    /**
     * @var smallint $hide
     *
     * @ORM\Column(name="hide", type="smallint", nullable=false)
     */
    private $hide;

    /**
     * @var integer $sort
     *
     * @ORM\Column(name="sort", type="integer", nullable=false)
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
     * Set filename
     *
     * @param string $filename
     * @return GalleryImages
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;
        return $this;
    }

    /**
     * Get filename
     *
     * @return string 
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set galleryId
     *
     * @param integer $galleryId
     * @return GalleryImages
     */
    public function setGalleryId($galleryId)
    {
        $this->galleryId = $galleryId;
        return $this;
    }

    /**
     * Get galleryId
     *
     * @return integer 
     */
    public function getGalleryId()
    {
        return $this->galleryId;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return GalleryImages
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
     * Set description
     *
     * @param string $description
     * @return GalleryImages
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set hide
     *
     * @param smallint $hide
     * @return GalleryImages
     */
    public function setHide($hide)
    {
        $this->hide = $hide;
        return $this;
    }

    /**
     * Get hide
     *
     * @return smallint 
     */
    public function getHide()
    {
        return $this->hide;
    }

    /**
     * Set sort
     *
     * @param integer $sort
     * @return GalleryImages
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