<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\Categories
 *
 * @ORM\Table(name="categories")
 * @ORM\Entity
 */
class Categories
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="categories_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var integer $categoryGroupId
     *
     * @ORM\Column(name="category_group_id", type="integer", nullable=false)
     */
    private $categoryGroupId;

    /**
     * @var integer $parentId
     *
     * @ORM\Column(name="parent_id", type="integer", nullable=false)
     */
    private $parentId;

    /**
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string $urlTitle
     *
     * @ORM\Column(name="url_title", type="string", length=255, nullable=false)
     */
    private $urlTitle;

    /**
     * @var text $description
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

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
     * @var string $subcategoriesVisibility
     *
     * @ORM\Column(name="subcategories_visibility", type="string", length=255, nullable=false)
     */
    private $subcategoriesVisibility;

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
     * Set categoryGroupId
     *
     * @param integer $categoryGroupId
     * @return Categories
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

    /**
     * Set parentId
     *
     * @param integer $parentId
     * @return Categories
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
     * Set title
     *
     * @param string $title
     * @return Categories
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
     * Set urlTitle
     *
     * @param string $urlTitle
     * @return Categories
     */
    public function setUrlTitle($urlTitle)
    {
        $this->urlTitle = $urlTitle;
        return $this;
    }

    /**
     * Get urlTitle
     *
     * @return string 
     */
    public function getUrlTitle()
    {
        return $this->urlTitle;
    }

    /**
     * Set description
     *
     * @param text $description
     * @return Categories
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
     * Set tagId
     *
     * @param string $tagId
     * @return Categories
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
     * @return Categories
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
     * @return Categories
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
     * Set subcategoriesVisibility
     *
     * @param string $subcategoriesVisibility
     * @return Categories
     */
    public function setSubcategoriesVisibility($subcategoriesVisibility)
    {
        $this->subcategoriesVisibility = $subcategoriesVisibility;
        return $this;
    }

    /**
     * Get subcategoriesVisibility
     *
     * @return string 
     */
    public function getSubcategoriesVisibility()
    {
        return $this->subcategoriesVisibility;
    }

    /**
     * Set hide
     *
     * @param smallint $hide
     * @return Categories
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
     * @return Categories
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