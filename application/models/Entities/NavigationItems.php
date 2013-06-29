<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\NavigationItems
 *
 * @ORM\Table(name="navigation_items")
 * @ORM\Entity
 */
class NavigationItems
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="navigation_items_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $type
     *
     * @ORM\Column(name="type", type="string", length=25, nullable=false)
     */
    private $type;

    /**
     * @var integer $entryId
     *
     * @ORM\Column(name="entry_id", type="integer", nullable=true)
     */
    private $entryId;

    /**
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=100, nullable=true)
     */
    private $title;

    /**
     * @var string $url
     *
     * @ORM\Column(name="url", type="string", length=255, nullable=true)
     */
    private $url;

    /**
     * @var string $tagId
     *
     * @ORM\Column(name="tag_id", type="string", length=255, nullable=true)
     */
    private $tagId;

    /**
     * @var string $class
     *
     * @ORM\Column(name="class", type="string", length=255, nullable=true)
     */
    private $class;

    /**
     * @var string $target
     *
     * @ORM\Column(name="target", type="string", length=50, nullable=true)
     */
    private $target;

    /**
     * @var integer $parentId
     *
     * @ORM\Column(name="parent_id", type="integer", nullable=false)
     */
    private $parentId;

    /**
     * @var integer $navigationId
     *
     * @ORM\Column(name="navigation_id", type="integer", nullable=false)
     */
    private $navigationId;

    /**
     * @var string $subnavVisibility
     *
     * @ORM\Column(name="subnav_visibility", type="string", length=255, nullable=false)
     */
    private $subnavVisibility;

    /**
     * @var smallint $hide
     *
     * @ORM\Column(name="hide", type="smallint", nullable=false)
     */
    private $hide;

    /**
     * @var smallint $disableCurrent
     *
     * @ORM\Column(name="disable_current", type="smallint", nullable=false)
     */
    private $disableCurrent;

    /**
     * @var smallint $disableCurrentTrail
     *
     * @ORM\Column(name="disable_current_trail", type="smallint", nullable=false)
     */
    private $disableCurrentTrail;

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
     * Set type
     *
     * @param string $type
     * @return NavigationItems
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set entryId
     *
     * @param integer $entryId
     * @return NavigationItems
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
     * Set title
     *
     * @param string $title
     * @return NavigationItems
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
     * Set url
     *
     * @param string $url
     * @return NavigationItems
     */
    public function setUrl($url)
    {
        $this->url = $url;
        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set tagId
     *
     * @param string $tagId
     * @return NavigationItems
     */
    public function setTagId($tagId)
    {
        $this->tagId = $tagId;
        return $this;
    }

    /**
     * Get tagId
     *
     * @return string 
     */
    public function getTagId()
    {
        return $this->tagId;
    }

    /**
     * Set class
     *
     * @param string $class
     * @return NavigationItems
     */
    public function setClass($class)
    {
        $this->class = $class;
        return $this;
    }

    /**
     * Get class
     *
     * @return string 
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set target
     *
     * @param string $target
     * @return NavigationItems
     */
    public function setTarget($target)
    {
        $this->target = $target;
        return $this;
    }

    /**
     * Get target
     *
     * @return string 
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Set parentId
     *
     * @param integer $parentId
     * @return NavigationItems
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;
        return $this;
    }

    /**
     * Get parentId
     *
     * @return integer 
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Set navigationId
     *
     * @param integer $navigationId
     * @return NavigationItems
     */
    public function setNavigationId($navigationId)
    {
        $this->navigationId = $navigationId;
        return $this;
    }

    /**
     * Get navigationId
     *
     * @return integer 
     */
    public function getNavigationId()
    {
        return $this->navigationId;
    }

    /**
     * Set subnavVisibility
     *
     * @param string $subnavVisibility
     * @return NavigationItems
     */
    public function setSubnavVisibility($subnavVisibility)
    {
        $this->subnavVisibility = $subnavVisibility;
        return $this;
    }

    /**
     * Get subnavVisibility
     *
     * @return string 
     */
    public function getSubnavVisibility()
    {
        return $this->subnavVisibility;
    }

    /**
     * Set hide
     *
     * @param smallint $hide
     * @return NavigationItems
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
     * Set disableCurrent
     *
     * @param smallint $disableCurrent
     * @return NavigationItems
     */
    public function setDisableCurrent($disableCurrent)
    {
        $this->disableCurrent = $disableCurrent;
        return $this;
    }

    /**
     * Get disableCurrent
     *
     * @return smallint 
     */
    public function getDisableCurrent()
    {
        return $this->disableCurrent;
    }

    /**
     * Set disableCurrentTrail
     *
     * @param smallint $disableCurrentTrail
     * @return NavigationItems
     */
    public function setDisableCurrentTrail($disableCurrentTrail)
    {
        $this->disableCurrentTrail = $disableCurrentTrail;
        return $this;
    }

    /**
     * Get disableCurrentTrail
     *
     * @return smallint 
     */
    public function getDisableCurrentTrail()
    {
        return $this->disableCurrentTrail;
    }

    /**
     * Set sort
     *
     * @param integer $sort
     * @return NavigationItems
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