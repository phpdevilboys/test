<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\Navigations
 *
 * @ORM\Table(name="navigations")
 * @ORM\Entity
 */
class Navigations
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="navigations_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $title
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var smallint $required
     *
     * @ORM\Column(name="required", type="smallint", nullable=false)
     */
    private $required;


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
     * @return Navigations
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
     * Set required
     *
     * @param smallint $required
     * @return Navigations
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
}