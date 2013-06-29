<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\GmaUserAuthTemp
 *
 * @ORM\Table(name="gma_user_auth_temp")
 * @ORM\Entity
 */
class GmaUserAuthTemp
{
    /**
     * @var integer $userId
     *
     * @ORM\Column(name="user_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $userId;

    /**
     * @var string $authToken
     *
     * @ORM\Column(name="auth_token", type="string", length=100, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $authToken;

    /**
     * @var datetime $sentOn
     *
     * @ORM\Column(name="sent_on", type="datetime", nullable=true)
     */
    private $sentOn;


    /**
     * Set userId
     *
     * @param integer $userId
     * @return GmaUserAuthTemp
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set authToken
     *
     * @param string $authToken
     * @return GmaUserAuthTemp
     */
    public function setAuthToken($authToken)
    {
        $this->authToken = $authToken;
        return $this;
    }

    /**
     * Get authToken
     *
     * @return string 
     */
    public function getAuthToken()
    {
        return $this->authToken;
    }

    /**
     * Set sentOn
     *
     * @param datetime $sentOn
     * @return GmaUserAuthTemp
     */
    public function setSentOn($sentOn)
    {
        $this->sentOn = $sentOn;
        return $this;
    }

    /**
     * Get sentOn
     *
     * @return datetime 
     */
    public function getSentOn()
    {
        return $this->sentOn;
    }
}