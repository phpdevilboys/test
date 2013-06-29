<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\GmaUserTransaction
 *
 * @ORM\Table(name="gma_user_transaction")
 * @ORM\Entity
 */
class GmaUserTransaction
{
    /**
     * @var integer $userTransactionId
     *
     * @ORM\Column(name="user_transaction_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gma_user_transaction_user_transaction_id_seq", allocationSize="1", initialValue="1")
     */
    private $userTransactionId;

    /**
     * @var string $billingAddress
     *
     * @ORM\Column(name="billing_address", type="string", length=255, nullable=false)
     */
    private $billingAddress;

    /**
     * @var string $postalCode
     *
     * @ORM\Column(name="postal_code", type="string", length=25, nullable=false)
     */
    private $postalCode;

    /**
     * @var string $location
     *
     * @ORM\Column(name="location", type="string", length=200, nullable=false)
     */
    private $location;

    /**
     * @var string $state
     *
     * @ORM\Column(name="state", type="string", length=100, nullable=false)
     */
    private $state;

    /**
     * @var string $phoneNo
     *
     * @ORM\Column(name="phone_no", type="string", length=20, nullable=false)
     */
    private $phoneNo;

    /**
     * @var string $gmaTransactionId
     *
     * @ORM\Column(name="gma_transaction_id", type="string", length=200, nullable=false)
     */
    private $gmaTransactionId;

    /**
     * @var string $gmaMerchantId
     *
     * @ORM\Column(name="gma_merchant_id", type="string", length=200, nullable=false)
     */
    private $gmaMerchantId;

    /**
     * @var datetime $createdDate
     *
     * @ORM\Column(name="created_date", type="datetime", nullable=false)
     */
    private $createdDate;

    /**
     * @var string $paymentResponseStatus
     *
     * @ORM\Column(name="payment_response_status", type="string", length=200, nullable=false)
     */
    private $paymentResponseStatus;

    /**
     * @var string $paymentStatus
     *
     * @ORM\Column(name="payment_status", type="string", length=255, nullable=false)
     */
    private $paymentStatus;

    /**
     * @var integer $portfolioId
     *
     * @ORM\Column(name="portfolio_id", type="integer", nullable=false)
     */
    private $portfolioId;


    /**
     * Get userTransactionId
     *
     * @return integer 
     */
    public function getUserTransactionId()
    {
        return $this->userTransactionId;
    }

    /**
     * Set billingAddress
     *
     * @param string $billingAddress
     * @return GmaUserTransaction
     */
    public function setBillingAddress($billingAddress)
    {
        $this->billingAddress = $billingAddress;
        return $this;
    }

    /**
     * Get billingAddress
     *
     * @return string 
     */
    public function getBillingAddress()
    {
        return $this->billingAddress;
    }

    /**
     * Set postalCode
     *
     * @param string $postalCode
     * @return GmaUserTransaction
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * Get postalCode
     *
     * @return string 
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * Set location
     *
     * @param string $location
     * @return GmaUserTransaction
     */
    public function setLocation($location)
    {
        $this->location = $location;
        return $this;
    }

    /**
     * Get location
     *
     * @return string 
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set state
     *
     * @param string $state
     * @return GmaUserTransaction
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * Get state
     *
     * @return string 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set phoneNo
     *
     * @param string $phoneNo
     * @return GmaUserTransaction
     */
    public function setPhoneNo($phoneNo)
    {
        $this->phoneNo = $phoneNo;
        return $this;
    }

    /**
     * Get phoneNo
     *
     * @return string 
     */
    public function getPhoneNo()
    {
        return $this->phoneNo;
    }

    /**
     * Set gmaTransactionId
     *
     * @param string $gmaTransactionId
     * @return GmaUserTransaction
     */
    public function setGmaTransactionId($gmaTransactionId)
    {
        $this->gmaTransactionId = $gmaTransactionId;
        return $this;
    }

    /**
     * Get gmaTransactionId
     *
     * @return string 
     */
    public function getGmaTransactionId()
    {
        return $this->gmaTransactionId;
    }

    /**
     * Set gmaMerchantId
     *
     * @param string $gmaMerchantId
     * @return GmaUserTransaction
     */
    public function setGmaMerchantId($gmaMerchantId)
    {
        $this->gmaMerchantId = $gmaMerchantId;
        return $this;
    }

    /**
     * Get gmaMerchantId
     *
     * @return string 
     */
    public function getGmaMerchantId()
    {
        return $this->gmaMerchantId;
    }

    /**
     * Set createdDate
     *
     * @param datetime $createdDate
     * @return GmaUserTransaction
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;
        return $this;
    }

    /**
     * Get createdDate
     *
     * @return datetime 
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Set paymentResponseStatus
     *
     * @param string $paymentResponseStatus
     * @return GmaUserTransaction
     */
    public function setPaymentResponseStatus($paymentResponseStatus)
    {
        $this->paymentResponseStatus = $paymentResponseStatus;
        return $this;
    }

    /**
     * Get paymentResponseStatus
     *
     * @return string 
     */
    public function getPaymentResponseStatus()
    {
        return $this->paymentResponseStatus;
    }

    /**
     * Set paymentStatus
     *
     * @param string $paymentStatus
     * @return GmaUserTransaction
     */
    public function setPaymentStatus($paymentStatus)
    {
        $this->paymentStatus = $paymentStatus;
        return $this;
    }

    /**
     * Get paymentStatus
     *
     * @return string 
     */
    public function getPaymentStatus()
    {
        return $this->paymentStatus;
    }

    /**
     * Set portfolioId
     *
     * @param integer $portfolioId
     * @return GmaUserTransaction
     */
    public function setPortfolioId($portfolioId)
    {
        $this->portfolioId = $portfolioId;
        return $this;
    }

    /**
     * Get portfolioId
     *
     * @return integer 
     */
    public function getPortfolioId()
    {
        return $this->portfolioId;
    }
}