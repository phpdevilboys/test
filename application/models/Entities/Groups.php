<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\Groups
 *
 * @ORM\Table(name="groups")
 * @ORM\Entity
 */
class Groups
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="groups_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $name
     *
     * @ORM\Column(name="name", type="string", length=50, nullable=false)
     */
    private $name;

    /**
     * @var string $type
     *
     * @ORM\Column(name="type", type="string", length=15, nullable=false)
     */
    private $type;

    /**
     * @var text $permissions
     *
     * @ORM\Column(name="permissions", type="text", nullable=true)
     */
    private $permissions;

    /**
     * @var smallint $required
     *
     * @ORM\Column(name="required", type="smallint", nullable=false)
     */
    private $required;

    /**
     * @var smallint $modifiablePermissions
     *
     * @ORM\Column(name="modifiable_permissions", type="smallint", nullable=false)
     */
    private $modifiablePermissions;


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
     * Set name
     *
     * @param string $name
     * @return Groups
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set type
     *
     * @param string $type
     * @return Groups
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
     * Set permissions
     *
     * @param text $permissions
     * @return Groups
     */
    public function setPermissions($permissions)
    {
        $this->permissions = $permissions;
        return $this;
    }

    /**
     * Get permissions
     *
     * @return text 
     */
    public function getPermissions()
    {
        return $this->permissions;
    }

    /**
     * Set required
     *
     * @param smallint $required
     * @return Groups
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
     * Set modifiablePermissions
     *
     * @param smallint $modifiablePermissions
     * @return Groups
     */
    public function setModifiablePermissions($modifiablePermissions)
    {
        $this->modifiablePermissions = $modifiablePermissions;
        return $this;
    }

    /**
     * Get modifiablePermissions
     *
     * @return smallint 
     */
    public function getModifiablePermissions()
    {
        return $this->modifiablePermissions;
    }
}