<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\ContentTypesAdminGroups
 *
 * @ORM\Table(name="content_types_admin_groups")
 * @ORM\Entity
 */
class ContentTypesAdminGroups
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="content_types_admin_groups_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var integer $contentTypeId
     *
     * @ORM\Column(name="content_type_id", type="integer", nullable=false)
     */
    private $contentTypeId;

    /**
     * @var integer $groupId
     *
     * @ORM\Column(name="group_id", type="integer", nullable=false)
     */
    private $groupId;


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
     * @return ContentTypesAdminGroups
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
     * Set groupId
     *
     * @param integer $groupId
     * @return ContentTypesAdminGroups
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;
        return $this;
    }

    /**
     * Get groupId
     *
     * @return integer 
     */
    public function getGroupId()
    {
        return $this->groupId;
    }
}