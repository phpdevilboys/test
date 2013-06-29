<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\EntryRevisions
 *
 * @ORM\Table(name="entry_revisions")
 * @ORM\Entity
 */
class EntryRevisions
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="entry_revisions_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var integer $entryId
     *
     * @ORM\Column(name="entry_id", type="integer", nullable=false)
     */
    private $entryId;

    /**
     * @var integer $contentTypeId
     *
     * @ORM\Column(name="content_type_id", type="integer", nullable=false)
     */
    private $contentTypeId;

    /**
     * @var integer $authorId
     *
     * @ORM\Column(name="author_id", type="integer", nullable=true)
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
     * Set entryId
     *
     * @param integer $entryId
     * @return EntryRevisions
     */
    public function setEntryId($entryId)
    {
        $this->entryId = $entryId;
        return $this;
    }

    /**
     * Get entryId
     *
     * @return integer 
     */
    public function getEntryId()
    {
        return $this->entryId;
    }

    /**
     * Set contentTypeId
     *
     * @param integer $contentTypeId
     * @return EntryRevisions
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
     * @return EntryRevisions
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
     * @return EntryRevisions
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
     * @return EntryRevisions
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
     * @return EntryRevisions
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