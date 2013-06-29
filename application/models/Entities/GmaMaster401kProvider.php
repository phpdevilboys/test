<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\GmaMaster401kProvider
 *
 * @ORM\Table(name="gma_master_401k_provider")
 * @ORM\Entity
 */
class GmaMaster401kProvider
{
    /**
     * @var integer $providerId
     *
     * @ORM\Column(name="provider_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gma_master_401k_provider_provider_id_seq", allocationSize="1", initialValue="1")
     */
    private $providerId;

    /**
     * @var string $providerName
     *
     * @ORM\Column(name="provider_name", type="string", length=255, nullable=false)
     */
    private $providerName;


    /**
     * Get providerId
     *
     * @return integer 
     */
    public function getProviderId()
    {
        return $this->providerId;
    }

    /**
     * Set providerName
     *
     * @param string $providerName
     * @return GmaMaster401kProvider
     */
    public function setProviderName($providerName)
    {
        $this->providerName = $providerName;
        return $this;
    }

    /**
     * Get providerName
     *
     * @return string 
     */
    public function getProviderName()
    {
        return $this->providerName;
    }
}