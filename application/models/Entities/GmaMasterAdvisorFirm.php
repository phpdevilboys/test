<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\GmaMasterAdvisorFirm
 *
 * @ORM\Table(name="gma_master_advisor_firm")
 * @ORM\Entity
 */
class GmaMasterAdvisorFirm
{
    /**
     * @var integer $firmId
     *
     * @ORM\Column(name="firm_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gma_master_advisor_firm_firm_id_seq", allocationSize="1", initialValue="1")
     */
    private $firmId;

    /**
     * @var string $firmName
     *
     * @ORM\Column(name="firm_name", type="string", length=150, nullable=true)
     */
    private $firmName;


    /**
     * Get firmId
     *
     * @return integer 
     */
    public function getFirmId()
    {
        return $this->firmId;
    }

    /**
     * Set firmName
     *
     * @param string $firmName
     * @return GmaMasterAdvisorFirm
     */
    public function setFirmName($firmName)
    {
        $this->firmName = $firmName;
        return $this;
    }

    /**
     * Get firmName
     *
     * @return string 
     */
    public function getFirmName()
    {
        return $this->firmName;
    }
}