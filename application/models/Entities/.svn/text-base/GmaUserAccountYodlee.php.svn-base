<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\GmaUserAccountYodlee
 *
 * @ORM\Table(name="gma_user_account_yodlee")
 * @ORM\Entity
 */
class GmaUserAccountYodlee
{
    /**
     * @var integer $yodleeAccountId
     *
     * @ORM\Column(name="yodlee_account_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gma_user_account_yodlee_yodlee_account_id_seq", allocationSize="1", initialValue="1")
     */
    private $yodleeAccountId;

    /**
     * @var string $contenerName
     *
     * @ORM\Column(name="contener_name", type="string", length=150, nullable=true)
     */
    private $contenerName;

    /**
     * @var integer $itemid
     *
     * @ORM\Column(name="itemid", type="integer", nullable=true)
     */
    private $itemid;

    /**
     * @var integer $itemAccountId
     *
     * @ORM\Column(name="item_account_id", type="integer", nullable=true)
     */
    private $itemAccountId;

    /**
     * @var string $accountName
     *
     * @ORM\Column(name="account_name", type="string", length=250, nullable=true)
     */
    private $accountName;

    /**
     * @var datetime $lastUpadated
     *
     * @ORM\Column(name="last_upadated", type="datetime", nullable=true)
     */
    private $lastUpadated;

    /**
     * @var string $accountType
     *
     * @ORM\Column(name="account_type", type="string", length=50, nullable=true)
     */
    private $accountType;

    /**
     * @var integer $accountTypeId
     *
     * @ORM\Column(name="account_type_id", type="integer", nullable=true)
     */
    private $accountTypeId;

    /**
     * @var string $accountNumber
     *
     * @ORM\Column(name="account_number", type="string", length=150, nullable=true)
     */
    private $accountNumber;

    /**
     * @var float $totalBalance
     *
     * @ORM\Column(name="total_balance", type="float", nullable=true)
     */
    private $totalBalance;

    /**
     * @var string $accountHolder
     *
     * @ORM\Column(name="account_holder", type="string", length=100, nullable=true)
     */
    private $accountHolder;

    /**
     * @var string $cash
     *
     * @ORM\Column(name="cash", type="string", length=75, nullable=true)
     */
    private $cash;

    /**
     * @var string $moneyMarketBalance
     *
     * @ORM\Column(name="money_market_balance", type="string", length=50, nullable=true)
     */
    private $moneyMarketBalance;

    /**
     * @var string $marginBalance
     *
     * @ORM\Column(name="margin_balance", type="string", length=50, nullable=true)
     */
    private $marginBalance;

    /**
     * @var string $holdingType
     *
     * @ORM\Column(name="holding_type", type="string", length=50, nullable=true)
     */
    private $holdingType;

    /**
     * @var string $tickerSymbol
     *
     * @ORM\Column(name="ticker_symbol", type="string", length=50, nullable=true)
     */
    private $tickerSymbol;

    /**
     * @var integer $quantity
     *
     * @ORM\Column(name="quantity", type="integer", nullable=true)
     */
    private $quantity;

    /**
     * @var float $price
     *
     * @ORM\Column(name="price", type="float", nullable=true)
     */
    private $price;

    /**
     * @var string $value
     *
     * @ORM\Column(name="value", type="string", length=150, nullable=true)
     */
    private $value;

    /**
     * @var string $cuisp
     *
     * @ORM\Column(name="cuisp", type="string", length=50, nullable=true)
     */
    private $cuisp;

    /**
     * @var text $description
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var date $createdDate
     *
     * @ORM\Column(name="created_date", type="date", nullable=true)
     */
    private $createdDate;

    /**
     * @var Entities\GmaPortfolio
     *
     * @ORM\OneToOne(targetEntity="Entities\GmaPortfolio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="portfolio_id", referencedColumnName="portfolio_id", unique=true)
     * })
     */
    private $portfolio;


    /**
     * Get yodleeAccountId
     *
     * @return integer 
     */
    public function getYodleeAccountId()
    {
        return $this->yodleeAccountId;
    }

    /**
     * Set contenerName
     *
     * @param string $contenerName
     * @return GmaUserAccountYodlee
     */
    public function setContenerName($contenerName)
    {
        $this->contenerName = $contenerName;
        return $this;
    }

    /**
     * Get contenerName
     *
     * @return string 
     */
    public function getContenerName()
    {
        return $this->contenerName;
    }

    /**
     * Set itemid
     *
     * @param integer $itemid
     * @return GmaUserAccountYodlee
     */
    public function setItemid($itemid)
    {
        $this->itemid = $itemid;
        return $this;
    }

    /**
     * Get itemid
     *
     * @return integer 
     */
    public function getItemid()
    {
        return $this->itemid;
    }

    /**
     * Set itemAccountId
     *
     * @param integer $itemAccountId
     * @return GmaUserAccountYodlee
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
     * Set accountName
     *
     * @param string $accountName
     * @return GmaUserAccountYodlee
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
     * Set lastUpadated
     *
     * @param datetime $lastUpadated
     * @return GmaUserAccountYodlee
     */
    public function setLastUpadated($lastUpadated)
    {
        $this->lastUpadated = $lastUpadated;
        return $this;
    }

    /**
     * Get lastUpadated
     *
     * @return datetime 
     */
    public function getLastUpadated()
    {
        return $this->lastUpadated;
    }

    /**
     * Set accountType
     *
     * @param string $accountType
     * @return GmaUserAccountYodlee
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;
        return $this;
    }

    /**
     * Get accountType
     *
     * @return string 
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * Set accountTypeId
     *
     * @param integer $accountTypeId
     * @return GmaUserAccountYodlee
     */
    public function setAccountTypeId($accountTypeId)
    {
        $this->accountTypeId = $accountTypeId;
        return $this;
    }

    /**
     * Get accountTypeId
     *
     * @return integer 
     */
    public function getAccountTypeId()
    {
        return $this->accountTypeId;
    }

    /**
     * Set accountNumber
     *
     * @param string $accountNumber
     * @return GmaUserAccountYodlee
     */
    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
        return $this;
    }

    /**
     * Get accountNumber
     *
     * @return string 
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    /**
     * Set totalBalance
     *
     * @param float $totalBalance
     * @return GmaUserAccountYodlee
     */
    public function setTotalBalance($totalBalance)
    {
        $this->totalBalance = $totalBalance;
        return $this;
    }

    /**
     * Get totalBalance
     *
     * @return float 
     */
    public function getTotalBalance()
    {
        return $this->totalBalance;
    }

    /**
     * Set accountHolder
     *
     * @param string $accountHolder
     * @return GmaUserAccountYodlee
     */
    public function setAccountHolder($accountHolder)
    {
        $this->accountHolder = $accountHolder;
        return $this;
    }

    /**
     * Get accountHolder
     *
     * @return string 
     */
    public function getAccountHolder()
    {
        return $this->accountHolder;
    }

    /**
     * Set cash
     *
     * @param string $cash
     * @return GmaUserAccountYodlee
     */
    public function setCash($cash)
    {
        $this->cash = $cash;
        return $this;
    }

    /**
     * Get cash
     *
     * @return string 
     */
    public function getCash()
    {
        return $this->cash;
    }

    /**
     * Set moneyMarketBalance
     *
     * @param string $moneyMarketBalance
     * @return GmaUserAccountYodlee
     */
    public function setMoneyMarketBalance($moneyMarketBalance)
    {
        $this->moneyMarketBalance = $moneyMarketBalance;
        return $this;
    }

    /**
     * Get moneyMarketBalance
     *
     * @return string 
     */
    public function getMoneyMarketBalance()
    {
        return $this->moneyMarketBalance;
    }

    /**
     * Set marginBalance
     *
     * @param string $marginBalance
     * @return GmaUserAccountYodlee
     */
    public function setMarginBalance($marginBalance)
    {
        $this->marginBalance = $marginBalance;
        return $this;
    }

    /**
     * Get marginBalance
     *
     * @return string 
     */
    public function getMarginBalance()
    {
        return $this->marginBalance;
    }

    /**
     * Set holdingType
     *
     * @param string $holdingType
     * @return GmaUserAccountYodlee
     */
    public function setHoldingType($holdingType)
    {
        $this->holdingType = $holdingType;
        return $this;
    }

    /**
     * Get holdingType
     *
     * @return string 
     */
    public function getHoldingType()
    {
        return $this->holdingType;
    }

    /**
     * Set tickerSymbol
     *
     * @param string $tickerSymbol
     * @return GmaUserAccountYodlee
     */
    public function setTickerSymbol($tickerSymbol)
    {
        $this->tickerSymbol = $tickerSymbol;
        return $this;
    }

    /**
     * Get tickerSymbol
     *
     * @return string 
     */
    public function getTickerSymbol()
    {
        return $this->tickerSymbol;
    }

    /**
     * Set quantity
     *
     * @param integer $quantity
     * @return GmaUserAccountYodlee
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * Get quantity
     *
     * @return integer 
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return GmaUserAccountYodlee
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set value
     *
     * @param string $value
     * @return GmaUserAccountYodlee
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set cuisp
     *
     * @param string $cuisp
     * @return GmaUserAccountYodlee
     */
    public function setCuisp($cuisp)
    {
        $this->cuisp = $cuisp;
        return $this;
    }

    /**
     * Get cuisp
     *
     * @return string 
     */
    public function getCuisp()
    {
        return $this->cuisp;
    }

    /**
     * Set description
     *
     * @param text $description
     * @return GmaUserAccountYodlee
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

    /**
     * Set createdDate
     *
     * @param date $createdDate
     * @return GmaUserAccountYodlee
     */
    public function setCreatedDate($createdDate)
    {
        $this->createdDate = $createdDate;
        return $this;
    }

    /**
     * Get createdDate
     *
     * @return date 
     */
    public function getCreatedDate()
    {
        return $this->createdDate;
    }

    /**
     * Set portfolio
     *
     * @param Entities\GmaPortfolio $portfolio
     * @return GmaUserAccountYodlee
     */
    public function setPortfolio(\Entities\GmaPortfolio $portfolio = null)
    {
        $this->portfolio = $portfolio;
        return $this;
    }

    /**
     * Get portfolio
     *
     * @return Entities\GmaPortfolio 
     */
    public function getPortfolio()
    {
        return $this->portfolio;
    }
}