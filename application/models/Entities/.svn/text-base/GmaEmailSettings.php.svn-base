<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\GmaEmailSettings
 *
 * @ORM\Table(name="gma_email_settings")
 * @ORM\Entity
 */
class GmaEmailSettings
{
    /**
     * @var integer $id
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gma_email_settings_id_seq", allocationSize="1", initialValue="1")
     */
    private $id;

    /**
     * @var string $host
     *
     * @ORM\Column(name="host", type="string", length=150, nullable=true)
     */
    private $host;

    /**
     * @var string $username
     *
     * @ORM\Column(name="username", type="string", length=150, nullable=true)
     */
    private $username;

    /**
     * @var string $password
     *
     * @ORM\Column(name="password", type="string", length=150, nullable=true)
     */
    private $password;

    /**
     * @var string $supportEmail
     *
     * @ORM\Column(name="support_email", type="string", length=150, nullable=true)
     */
    private $supportEmail;

    /**
     * @var string $contactEmail
     *
     * @ORM\Column(name="contact_email", type="string", length=150, nullable=true)
     */
    private $contactEmail;

    /**
     * @var datetime $createdAt
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @var datetime $updatedAt
     *
     * @ORM\Column(name="updated_at", type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @var string $protocol
     *
     * @ORM\Column(name="protocol", type="string", length=10, nullable=true)
     */
    private $protocol;


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
     * Set host
     *
     * @param string $host
     * @return GmaEmailSettings
     */
    public function setHost($host)
    {
        $this->host = $host;
        return $this;
    }

    /**
     * Get host
     *
     * @return string 
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return GmaEmailSettings
     */
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return GmaEmailSettings
     */
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set supportEmail
     *
     * @param string $supportEmail
     * @return GmaEmailSettings
     */
    public function setSupportEmail($supportEmail)
    {
        $this->supportEmail = $supportEmail;
        return $this;
    }

    /**
     * Get supportEmail
     *
     * @return string 
     */
    public function getSupportEmail()
    {
        return $this->supportEmail;
    }

    /**
     * Set contactEmail
     *
     * @param string $contactEmail
     * @return GmaEmailSettings
     */
    public function setContactEmail($contactEmail)
    {
        $this->contactEmail = $contactEmail;
        return $this;
    }

    /**
     * Get contactEmail
     *
     * @return string 
     */
    public function getContactEmail()
    {
        return $this->contactEmail;
    }

    /**
     * Set createdAt
     *
     * @param datetime $createdAt
     * @return GmaEmailSettings
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
        return $this;
    }

    /**
     * Get createdAt
     *
     * @return datetime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @param datetime $updatedAt
     * @return GmaEmailSettings
     */
    public function setUpdatedAt($updatedAt)
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

    /**
     * Get updatedAt
     *
     * @return datetime 
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }

    /**
     * Set protocol
     *
     * @param string $protocol
     * @return GmaEmailSettings
     */
    public function setProtocol($protocol)
    {
        $this->protocol = $protocol;
        return $this;
    }

    /**
     * Get protocol
     *
     * @return string 
     */
    public function getProtocol()
    {
        return $this->protocol;
    }
}