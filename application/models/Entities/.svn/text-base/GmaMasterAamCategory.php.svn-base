<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\GmaMasterAamCategory
 *
 * @ORM\Table(name="gma_master_aam_category")
 * @ORM\Entity
 */
class GmaMasterAamCategory
{
    /**
     * @var integer $aamCatId
     *
     * @ORM\Column(name="aam_cat_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gma_master_aam_category_aam_cat_id_seq", allocationSize="1", initialValue="1")
     */
    private $aamCatId;

    /**
     * @var string $category
     *
     * @ORM\Column(name="category", type="string", length=255, nullable=true)
     */
    private $category;

    /**
     * @var text $description
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;


    /**
     * Get aamCatId
     *
     * @return integer 
     */
    public function getAamCatId()
    {
        return $this->aamCatId;
    }

    /**
     * Set category
     *
     * @param string $category
     * @return GmaMasterAamCategory
     */
    public function setCategory($category)
    {
        $this->category = $category;
        return $this;
    }

    /**
     * Get category
     *
     * @return string 
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set description
     *
     * @param text $description
     * @return GmaMasterAamCategory
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
}