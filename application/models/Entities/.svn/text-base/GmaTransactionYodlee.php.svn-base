<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\GmaTransactionYodlee
 *
 * @ORM\Table(name="gma_transaction_yodlee")
 * @ORM\Entity
 */
class GmaTransactionYodlee
{
    /**
     * @var integer $yodleeTransactionId
     *
     * @ORM\Column(name="yodlee_transaction_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gma_transaction_yodlee_yodlee_transaction_id_seq", allocationSize="1", initialValue="1")
     */
    private $yodleeTransactionId;

    /**
     * @var string $accountName
     *
     * @ORM\Column(name="account_name", type="string", length=150, nullable=true)
     */
    private $accountName;

    /**
     * @var float $amount
     *
     * @ORM\Column(name="amount", type="float", nullable=true)
     */
    private $amount;

    /**
     * @var string $currencyCode
     *
     * @ORM\Column(name="currency_code", type="string", length=50, nullable=true)
     */
    private $currencyCode;

    /**
     * @var integer $currencyId
     *
     * @ORM\Column(name="currency_id", type="integer", nullable=true)
     */
    private $currencyId;

    /**
     * @var string $category
     *
     * @ORM\Column(name="category", type="string", length=100, nullable=true)
     */
    private $category;

    /**
     * @var integer $categoryId
     *
     * @ORM\Column(name="category_id", type="integer", nullable=true)
     */
    private $categoryId;

    /**
     * @var integer $categoryTypeId
     *
     * @ORM\Column(name="category_type_id", type="integer", nullable=true)
     */
    private $categoryTypeId;

    /**
     * @var string $container
     *
     * @ORM\Column(name="container", type="string", length=75, nullable=true)
     */
    private $container;

    /**
     * @var integer $itemAccountId
     *
     * @ORM\Column(name="item_account_id", type="integer", nullable=true)
     */
    private $itemAccountId;

    /**
     * @var string $txnBaseType
     *
     * @ORM\Column(name="txn_base_type", type="string", length=50, nullable=true)
     */
    private $txnBaseType;

    /**
     * @var string $businessExpense
     *
     * @ORM\Column(name="business_expense", type="string", length=10, nullable=true)
     */
    private $businessExpense;

    /**
     * @var string $medicalExpense
     *
     * @ORM\Column(name="medical_expense", type="string", length=10, nullable=true)
     */
    private $medicalExpense;

    /**
     * @var string $memo
     *
     * @ORM\Column(name="memo", type="string", length=50, nullable=true)
     */
    private $memo;

    /**
     * @var string $reimbursable
     *
     * @ORM\Column(name="reimbursable", type="string", length=50, nullable=true)
     */
    private $reimbursable;

    /**
     * @var text $txtSimpleDescription
     *
     * @ORM\Column(name="txt_simple_description", type="text", nullable=true)
     */
    private $txtSimpleDescription;

    /**
     * @var string $sharedTxn
     *
     * @ORM\Column(name="shared_txn", type="string", length=50, nullable=true)
     */
    private $sharedTxn;

    /**
     * @var string $taxDeductible
     *
     * @ORM\Column(name="tax_deductible", type="string", length=50, nullable=true)
     */
    private $taxDeductible;

    /**
     * @var integer $txnId
     *
     * @ORM\Column(name="txn_id", type="integer", nullable=true)
     */
    private $txnId;

    /**
     * @var string $txnStatus
     *
     * @ORM\Column(name="txn_status", type="string", length=50, nullable=true)
     */
    private $txnStatus;

    /**
     * @var datetime $createdDate
     *
     * @ORM\Column(name="created_date", type="datetime", nullable=true)
     */
    private $createdDate;

    /**
     * @var integer $portfolioId
     *
     * @ORM\Column(name="portfolio_id", type="integer", nullable=true)
     */
    private $portfolioId;


    /**
     * Get yodleeTransactionId
     *
     * @return integer 
     */
    public function getYodleeTransactionId()
    {
        return $this->yodleeTransactionId;
    }

    /**
     * Set accountName
     *
     * @param string $accountName
     * @return GmaTransactionYodlee
     */
    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;
        return $this;
    }

    /**
     * Get accountName
     *
     * @return string 
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * Set amount
     *
     * @param float $amount
     * @return GmaTransactionYodlee
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Get amount
     *
     * @return float 
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set currencyCode
     *
     * @param string $currencyCode
     * @return GmaTransactionYodlee
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * Get currencyCode
     *
     * @return string 
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * Set currencyId
     *
     * @param integer $currencyId
     * @return GmaTransactionYodlee
     */
    public function setCurrencyId($currencyId)
    {
        $this->currencyId = $currencyId;
        return $this;
    }

    /**
     * Get currencyId
     *
     * @return integer 
     */
    public function getCurrencyId()
    {
        return $this->currencyId;
    }

    /**
     * Set category
     *
     * @param string $category
     * @return GmaTransactionYodlee
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
     * Set categoryId
     *
     * @param integer $categoryId
     * @return GmaTransactionYodlee
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
     * Set categoryTypeId
     *
     * @param integer $categoryTypeId
     * @return GmaTransactionYodlee
     */
    public function setCategoryTypeId($categoryTypeId)
    {
        $this->categoryTypeId = $categoryTypeId;
        return $this;
    }

    /**
     * Get categoryTypeId
     *
     * @return integer 
     */
    public function getCategoryTypeId()
    {
        return $this->categoryTypeId;
    }

    /**
     * Set container
     *
     * @param string $container
     * @return GmaTransactionYodlee
     */
    public function setContainer($container)
    {
        $this->container = $container;
        return $this;
    }

    /**
     * Get container
     *
     * @return string 
     */
    public function getContainer()
    {
        return $this->container;
    }

    /**
     * Set itemAccountId
     *
     * @param integer $itemAccountId
     * @return GmaTransactionYodlee
     */
    public function setItemAccountId($itemAccountId)
    {
        $this->itemAccountId = $itemAccountId;
        return $this;
    }

    /**
     * Get itemAccountId
     *
     * @return integer 
     */
    public function getItemAccountId()
    {
        return $this->itemAccountId;
    }

    /**
     * Set txnBaseType
     *
     * @param string $txnBaseType
     * @return GmaTransactionYodlee
     */
    public function setTxnBaseType($txnBaseType)
    {
        $this->txnBaseType = $txnBaseType;
        return $this;
    }

    /**
     * Get txnBaseType
     *
     * @return string 
     */
    public function getTxnBaseType()
    {
        return $this->txnBaseType;
    }

    /**
     * Set businessExpense
     *
     * @param string $businessExpense
     * @return GmaTransactionYodlee
     */
    public function setBusinessExpense($businessExpense)
    {
        $this->businessExpense = $businessExpense;
        return $this;
    }

    /**
     * Get businessExpense
     *
     * @return string 
     */
    public function getBusinessExpense()
    {
        return $this->businessExpense;
    }

    /**
     * Set medicalExpense
     *
     * @param string $medicalExpense
     * @return GmaTransactionYodlee
     */
    public function setMedicalExpense($medicalExpense)
    {
        $this->medicalExpense = $medicalExpense;
        return $this;
    }

    /**
     * Get medicalExpense
     *
     * @return string 
     */
    public function getMedicalExpense()
    {
        return $this->medicalExpense;
    }

    /**
     * Set memo
     *
     * @param string $memo
     * @return GmaTransactionYodlee
     */
    public function setMemo($memo)
    {
        $this->memo = $memo;
        return $this;
    }

    /**
     * Get memo
     *
     * @return string 
     */
    public function getMemo()
    {
        return $this->memo;
    }

    /**
     * Set reimbursable
     *
     * @param string $reimbursable
     * @return GmaTransactionYodlee
     */
    public function setReimbursable($reimbursable)
    {
        $this->reimbursable = $reimbursable;
        return $this;
    }

    /**
     * Get reimbursable
     *
     * @return string 
     */
    public function getReimbursable()
    {
        return $this->reimbursable;
    }

    /**
     * Set txtSimpleDescription
     *
     * @param text $txtSimpleDescription
     * @return GmaTransactionYodlee
     */
    public function setTxtSimpleDescription($txtSimpleDescription)
    {
        $this->txtSimpleDescription = $txtSimpleDescription;
        return $this;
    }

    /**
     * Get txtSimpleDescription
     *
     * @return text 
     */
    public function getTxtSimpleDescription()
    {
        return $this->txtSimpleDescription;
    }

    /**
     * Set sharedTxn
     *
     * @param string $sharedTxn
     * @return GmaTransactionYodlee
     */
    public function setSharedTxn($sharedTxn)
    {
        $this->sharedTxn = $sharedTxn;
        return $this;
    }

    /**
     * Get sharedTxn
     *
     * @return string 
     */
    public function getSharedTxn()
    {
        return $this->sharedTxn;
    }

    /**
     * Set taxDeductible
     *
     * @param string $taxDeductible
     * @return GmaTransactionYodlee
     */
    public function setTaxDeductible($taxDeductible)
    {
        $this->taxDeductible = $taxDeductible;
        return $this;
    }

    /**
     * Get taxDeductible
     *
     * @return string 
     */
    public function getTaxDeductible()
    {
        return $this->taxDeductible;
    }

    /**
     * Set txnId
     *
     * @param integer $txnId
     * @return GmaTransactionYodlee
     */
    public function setTxnId($txnId)
    {
        $this->txnId = $txnId;
        return $this;
    }

    /**
     * Get txnId
     *
     * @return integer 
     */
    public function getTxnId()
    {
        return $this->txnId;
    }

    /**
     * Set txnStatus
     *
     * @param string $txnStatus
     * @return GmaTransactionYodlee
     */
    public function setTxnStatus($txnStatus)
    {
        $this->txnStatus = $txnStatus;
        return $this;
    }

    /**
     * Get txnStatus
     *
     * @return string 
     */
    public function getTxnStatus()
    {
        return $this->txnStatus;
    }

    /**
     * Set createdDate
     *
     * @param datetime $createdDate
     * @return GmaTransactionYodlee
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
     * Set portfolioId
     *
     * @param integer $portfolioId
     * @return GmaTransactionYodlee
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