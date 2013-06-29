<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\EntriesData
 *
 * @ORM\Table(name="entries_data")
 * @ORM\Entity
 */
class EntriesData
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="entries_data_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var integer $entryId
     *
     * @ORM\Column(name="entry_id", type="integer", nullable=false)
     */
    private $entryId;

    /**
     * @var text $fieldId1
     *
     * @ORM\Column(name="field_id_1", type="text", nullable=true)
     */
    private $fieldId1;

    /**
     * @var text $fieldId2
     *
     * @ORM\Column(name="field_id_2", type="text", nullable=true)
     */
    private $fieldId2;


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
     * @return EntriesData
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
     * Set fieldId1
     *
     * @param text $fieldId1
     * @return EntriesData
     */
    public function setFieldId1($fieldId1)
    {
        $this->fieldId1 = $fieldId1;
        return $this;
    }

    /**
     * Get fieldId1
     *
     * @return text 
     */
    public function getFieldId1()
    {
        return $this->fieldId1;
    }

    /**
     * Set fieldId2
     *
     * @param text $fieldId2
     * @return EntriesData
     */
    public function setFieldId2($fieldId2)
    {
        $this->fieldId2 = $fieldId2;
        return $this;
    }

    /**
     * Get fieldId2
     *
     * @return text 
     */
    public function getFieldId2()
    {
        return $this->fieldId2;
    }
}