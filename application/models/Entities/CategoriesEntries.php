<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\CategoriesEntries
 *
 * @ORM\Table(name="categories_entries")
 * @ORM\Entity
 */
class CategoriesEntries
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="categories_entries_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var integer $categoryId
     *
     * @ORM\Column(name="category_id", type="integer", nullable=false)
     */
    private $categoryId;

    /**
     * @var integer $entryId
     *
     * @ORM\Column(name="entry_id", type="integer", nullable=false)
     */
    private $entryId;


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
     * Set categoryId
     *
     * @param integer $categoryId
     * @return CategoriesEntries
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
        return $this;
    }

    /**
     * Get categoryId
     *
     * @return integer 
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set entryId
     *
     * @param integer $entryId
     * @return CategoriesEntries
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
}