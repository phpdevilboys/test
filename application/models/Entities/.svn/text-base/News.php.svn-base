<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\News
 *
 * @ORM\Table(name="news")
 * @ORM\Entity
 */
class News
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="news_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var text $description
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var datetime $createdAt
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var date $newsDate
     *
     * @ORM\Column(name="news_date", type="date", nullable=true)
     */
    private $newsDate;

    /**
     * @var string $newsImage
     *
     * @ORM\Column(name="news_image", type="string", length=255, nullable=true)
     */
    private $newsImage;


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
     * @return News
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
     * @param text $description
     * @return News
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Get description
     *
     * @return text 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set createdAt
     *
     * @param datetime $createdAt
     * @return News
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

    /**
     * Set newsDate
     *
     * @param date $newsDate
     * @return News
     */
    public function setNewsDate($newsDate)
    {
        $this->newsDate = $newsDate;
        return $this;
    }

    /**
     * Get newsDate
     *
     * @return date 
     */
    public function getNewsDate()
    {
        return $this->newsDate;
    }

    /**
     * Set newsImage
     *
     * @param string $newsImage
     * @return News
     */
    public function setNewsImage($newsImage)
    {
        $this->newsImage = $newsImage;
        return $this;
    }

    /**
     * Get newsImage
     *
     * @return string 
     */
    public function getNewsImage()
    {
        return $this->newsImage;
    }
}