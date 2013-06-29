<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\GmaPortfolio
 *
 * @ORM\Table(name="gma_portfolio")
 * @ORM\Entity
 */
class GmaPortfolio
{
    /**
     * @var integer $portfolioId
     *
     * @ORM\Column(name="portfolio_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gma_portfolio_portfolio_id_seq", allocationSize="1", initialValue="1")
     */
    private $portfolioId;

    /**
     * @var string $portfolioName
     *
     * @ORM\Column(name="portfolio_name", type="string", length=200, nullable=false)
     */
    private $portfolioName;

    /**
     * @var integer $advisorDetailsId
     *
     * @ORM\Column(name="advisor_details_id", type="integer", nullable=true)
     */
    private $advisorDetailsId;

    /**
     * @var datetime $createdDate
     *
     * @ORM\Column(name="created_date", type="datetime", nullable=true)
     */
    private $createdDate;

    /**
     * @var smallint $defaultAsset
     *
     * @ORM\Column(name="default_asset", type="smallint", nullable=true)
     */
    private $defaultAsset;

    /**
     * @var smallint $portfolioTypeId
     *
     * @ORM\Column(name="portfolio_type_id", type="smallint", nullable=true)
     */
    private $portfolioTypeId;

    /**
     * @var smallint $userDefineAsset
     *
     * @ORM\Column(name="user_define_asset", type="smallint", nullable=true)
     */
    private $userDefineAsset;

    /**
     * @var Entities\GmaUser
     *
     * @ORM\ManyToOne(targetEntity="Entities\GmaUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="user_id", referencedColumnName="user_id", unique=true)
     * })
     */
    private $user;


    /**
     * Get portfolioId
     *
     * @return integer 
     */
    public function getPortfolioId()
    {
        return $this->portfolioId;
    }

    /**
     * Set portfolioName
     *
     * @param string $portfolioName
     * @return GmaPortfolio
     */
    public function setPortfolioName($portfolioName)
    {
        $this->portfolioName = $portfolioName;
        return $this;
    }

    /**
     * Get portfolioName
     *
     * @return string 
     */
    public function getPortfolioName()
    {
        return $this->portfolioName;
    }

    /**
     * Set advisorDetailsId
     *
     * @param integer $advisorDetailsId
     * @return GmaPortfolio
     */
    public function setAdvisorDetailsId($advisorDetailsId)
    {
        $this->advisorDetailsId = $advisorDetailsId;
        return $this;
    }

    /**
     * Get advisorDetailsId
     *
     * @return integer 
     */
    public function getAdvisorDetailsId()
    {
        return $this->advisorDetailsId;
    }

    /**
     * Set createdDate
     *
     * @param datetime $createdDate
     * @return GmaPortfolio
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
     * Set defaultAsset
     *
     * @param smallint $defaultAsset
     * @return GmaPortfolio
     */
    public function setDefaultAsset($defaultAsset)
    {
        $this->defaultAsset = $defaultAsset;
        return $this;
    }

    /**
     * Get defaultAsset
     *
     * @return smallint 
     */
    public function getDefaultAsset()
    {
        return $this->defaultAsset;
    }

    /**
     * Set portfolioTypeId
     *
     * @param smallint $portfolioTypeId
     * @return GmaPortfolio
     */
    public function setPortfolioTypeId($portfolioTypeId)
    {
        $this->portfolioTypeId = $portfolioTypeId;
        return $this;
    }

    /**
     * Get portfolioTypeId
     *
     * @return smallint 
     */
    public function getPortfolioTypeId()
    {
        return $this->portfolioTypeId;
    }

    /**
     * Set userDefineAsset
     *
     * @param smallint $userDefineAsset
     * @return GmaPortfolio
     */
    public function setUserDefineAsset($userDefineAsset)
    {
        $this->userDefineAsset = $userDefineAsset;
        return $this;
    }

    /**
     * Get userDefineAsset
     *
     * @return smallint 
     */
    public function getUserDefineAsset()
    {
        return $this->userDefineAsset;
    }

    /**
     * Set user
     *
     * @param Entities\GmaUser $user
     * @return GmaPortfolio
     */
    public function setUser(\Entities\GmaUser $user = null)
    {
        $this->user = $user;
        return $this;
    }

    /**
     * Get user
     *
     * @return Entities\GmaUser 
     */
    public function getUser()
    {
        return $this->user;
    }
}