<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\ContentTypeRevisions
 *
 * @ORM\Table(name="content_type_revisions")
 * @ORM\Entity
 */
class ContentTypeRevisions
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="content_type_revisions_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var integer $contentTypeId
     *
     * @ORM\Column(name="content_type_id", type="integer", nullable=true)
     */
    private $contentTypeId;

    /**
     * @var integer $authorId
     *
     * @ORM\Column(name="author_id", type="integer", nullable=false)
     */
    private $authorId;

    /**
     * @var string $authorName
     *
     * @ORM\Column(name="author_name", type="string", length=150, nullable=false)
     */
    private $authorName;

    /**
     * @var datetime $revisionDate
     *
     * @ORM\Column(name="revision_date", type="datetime", nullable=false)
     */
    private $revisionDate;

    /**
     * @var text $revisionData
     *
     * @ORM\Column(name="revision_data", type="text", nullable=false)
     */
    private $revisionData;


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
     * @return ContentTypeRevisions
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
     * Set authorId
     *
     * @param integer $authorId
     * @return ContentTypeRevisions
     */
    public function setAuthorId($authorId)
    {
        $this->authorId = $authorId;
        return $this;
    }

    /**
     * Get authorId
     *
     * @return integer 
     */
    public function getAuthorId()
    {
        return $this->authorId;
    }

    /**
     * Set authorName
     *
     * @param string $authorName
     * @return ContentTypeRevisions
     */
    public function setAuthorName($authorName)
    {
        $this->authorName = $authorName;
        return $this;
    }

    /**
     * Get authorName
     *
     * @return string 
     */
    public function getAuthorName()
    {
        return $this->authorName;
    }

    /**
     * Set revisionDate
     *
     * @param datetime $revisionDate
     * @return ContentTypeRevisions
     */
    public function setRevisionDate($revisionDate)
    {
        $this->revisionDate = $revisionDate;
        return $this;
    }

    /**
     * Get revisionDate
     *
     * @return datetime 
     */
    public function getRevisionDate()
    {
        return $this->revisionDate;
    }

    /**
     * Set revisionData
     *
     * @param text $revisionData
     * @return ContentTypeRevisions
     */
    public function setRevisionData($revisionData)
    {
        $this->revisionData = $revisionData;
        return $this;
    }

    /**
     * Get revisionData
     *
     * @return text 
     */
    public function getRevisionData()
    {
        return $this->revisionData;
    }
}