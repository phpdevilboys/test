<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\ContentTypes
 *
 * @ORM\Table(name="content_types")
 * @ORM\Entity
 */
class ContentTypes
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="content_types_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string $shortName
     *
     * @ORM\Column(name="short_name", type="string", length=50, nullable=false)
     */
    private $shortName;

    /**
     * @var text $layout
     *
     * @ORM\Column(name="layout", type="text", nullable=true)
     */
    private $layout;

    /**
     * @var text $pageHead
     *
     * @ORM\Column(name="page_head", type="text", nullable=true)
     */
    private $pageHead;

    /**
     * @var string $themeLayout
     *
     * @ORM\Column(name="theme_layout", type="string", length=50, nullable=true)
     */
    private $themeLayout;

    /**
     * @var string $dynamicRoute
     *
     * @ORM\Column(name="dynamic_route", type="string", length=255, nullable=true)
     */
    private $dynamicRoute;

    /**
     * @var smallint $required
     *
     * @ORM\Column(name="required", type="smallint", nullable=false)
     */
    private $required;

    /**
     * @var smallint $access
     *
     * @ORM\Column(name="access", type="smallint", nullable=false)
     */
    private $access;

    /**
     * @var text $restrictTo
     *
     * @ORM\Column(name="restrict_to", type="text", nullable=true)
     */
    private $restrictTo;

    /**
     * @var smallint $restrictAdminAccess
     *
     * @ORM\Column(name="restrict_admin_access", type="smallint", nullable=false)
     */
    private $restrictAdminAccess;

    /**
     * @var smallint $enableVersioning
     *
     * @ORM\Column(name="enable_versioning", type="smallint", nullable=false)
     */
    private $enableVersioning;

    /**
     * @var integer $maxRevisions
     *
     * @ORM\Column(name="max_revisions", type="integer", nullable=false)
     */
    private $maxRevisions;

    /**
     * @var integer $entriesAllowed
     *
     * @ORM\Column(name="entries_allowed", type="integer", nullable=true)
     */
    private $entriesAllowed;

    /**
     * @var integer $categoryGroupId
     *
     * @ORM\Column(name="category_group_id", type="integer", nullable=true)
     */
    private $categoryGroupId;


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
     * @return ContentTypes
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
     * Set shortName
     *
     * @param string $shortName
     * @return ContentTypes
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;
        return $this;
    }

    /**
     * Get shortName
     *
     * @return string 
     */
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * Set layout
     *
     * @param text $layout
     * @return ContentTypes
     */
    public function setLayout($layout)
    {
        $this->layout = $layout;
        return $this;
    }

    /**
     * Get layout
     *
     * @return text 
     */
    public function getLayout()
    {
        return $this->layout;
    }

    /**
     * Set pageHead
     *
     * @param text $pageHead
     * @return ContentTypes
     */
    public function setPageHead($pageHead)
    {
        $this->pageHead = $pageHead;
        return $this;
    }

    /**
     * Get pageHead
     *
     * @return text 
     */
    public function getPageHead()
    {
        return $this->pageHead;
    }

    /**
     * Set themeLayout
     *
     * @param string $themeLayout
     * @return ContentTypes
     */
    public function setThemeLayout($themeLayout)
    {
        $this->themeLayout = $themeLayout;
        return $this;
    }

    /**
     * Get themeLayout
     *
     * @return string 
     */
    public function getThemeLayout()
    {
        return $this->themeLayout;
    }

    /**
     * Set dynamicRoute
     *
     * @param string $dynamicRoute
     * @return ContentTypes
     */
    public function setDynamicRoute($dynamicRoute)
    {
        $this->dynamicRoute = $dynamicRoute;
        return $this;
    }

    /**
     * Get dynamicRoute
     *
     * @return string 
     */
    public function getDynamicRoute()
    {
        return $this->dynamicRoute;
    }

    /**
     * Set required
     *
     * @param smallint $required
     * @return ContentTypes
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
     * Set access
     *
     * @param smallint $access
     * @return ContentTypes
     */
    public function setAccess($access)
    {
        $this->access = $access;
        return $this;
    }

    /**
     * Get access
     *
     * @return smallint 
     */
    public function getAccess()
    {
        return $this->access;
    }

    /**
     * Set restrictTo
     *
     * @param text $restrictTo
     * @return ContentTypes
     */
    public function setRestrictTo($restrictTo)
    {
        $this->restrictTo = $restrictTo;
        return $this;
    }

    /**
     * Get restrictTo
     *
     * @return text 
     */
    public function getRestrictTo()
    {
        return $this->restrictTo;
    }

    /**
     * Set restrictAdminAccess
     *
     * @param smallint $restrictAdminAccess
     * @return ContentTypes
     */
    public function setRestrictAdminAccess($restrictAdminAccess)
    {
        $this->restrictAdminAccess = $restrictAdminAccess;
        return $this;
    }

    /**
     * Get restrictAdminAccess
     *
     * @return smallint 
     */
    public function getRestrictAdminAccess()
    {
        return $this->restrictAdminAccess;
    }

    /**
     * Set enableVersioning
     *
     * @param smallint $enableVersioning
     * @return ContentTypes
     */
    public function setEnableVersioning($enableVersioning)
    {
        $this->enableVersioning = $enableVersioning;
        return $this;
    }

    /**
     * Get enableVersioning
     *
     * @return smallint 
     */
    public function getEnableVersioning()
    {
        return $this->enableVersioning;
    }

    /**
     * Set maxRevisions
     *
     * @param integer $maxRevisions
     * @return ContentTypes
     */
    public function setMaxRevisions($maxRevisions)
    {
        $this->maxRevisions = $maxRevisions;
        return $this;
    }

    /**
     * Get maxRevisions
     *
     * @return integer 
     */
    public function getMaxRevisions()
    {
        return $this->maxRevisions;
    }

    /**
     * Set entriesAllowed
     *
     * @param integer $entriesAllowed
     * @return ContentTypes
     */
    public function setEntriesAllowed($entriesAllowed)
    {
        $this->entriesAllowed = $entriesAllowed;
        return $this;
    }

    /**
     * Get entriesAllowed
     *
     * @return integer 
     */
    public function getEntriesAllowed()
    {
        return $this->entriesAllowed;
    }

    /**
     * Set categoryGroupId
     *
     * @param integer $categoryGroupId
     * @return ContentTypes
     */
    public function setCategoryGroupId($categoryGroupId)
    {
        $this->categoryGroupId = $categoryGroupId;
        return $this;
    }

    /**
     * Get categoryGroupId
     *
     * @return integer 
     */
    public function getCategoryGroupId()
    {
        return $this->categoryGroupId;
    }
}