<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\Video
 *
 * @ORM\Table(name="video")
 * @ORM\Entity
 */
class Video
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="video_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string $videoCode
     *
     * @ORM\Column(name="video_code", type="string", length=255, nullable=false)
     */
    private $videoCode;

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
     * @var string $videoType
     *
     * @ORM\Column(name="video_type", type="string", length=10, nullable=true)
     */
    private $videoType;


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
     * @return Video
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
     * Set videoCode
     *
     * @param string $videoCode
     * @return Video
     */
    public function setVideoCode($videoCode)
    {
        $this->videoCode = $videoCode;
        return $this;
    }

    /**
     * Get videoCode
     *
     * @return string 
     */
    public function getVideoCode()
    {
        return $this->videoCode;
    }

    /**
     * Set description
     *
     * @param text $description
     * @return Video
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
     * @return Video
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
     * Set videoType
     *
     * @param string $videoType
     * @return Video
     */
    public function setVideoType($videoType)
    {
        $this->videoType = $videoType;
        return $this;
    }

    /**
     * Get videoType
     *
     * @return string 
     */
    public function getVideoType()
    {
        return $this->videoType;
    }
}