<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\GmaRequestFinancialAdvisor
 *
 * @ORM\Table(name="gma_request_financial_advisor")
 * @ORM\Entity
 */
class GmaRequestFinancialAdvisor
{
    /**
     * @var integer $requestId
     *
     * @ORM\Column(name="request_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gma_request_financial_advisor_request_id_seq", allocationSize="1", initialValue="1")
     */
    private $requestId;

    /**
     * @var string $isCompleteByAdvisor
     *
     * @ORM\Column(name="is_complete_by_advisor", type="string", length=255, nullable=false)
     */
    private $isCompleteByAdvisor;

    /**
     * @var string $isResponseByAdvisor
     *
     * @ORM\Column(name="is_response_by_advisor", type="string", length=255, nullable=false)
     */
    private $isResponseByAdvisor;

    /**
     * @var string $advisorFeedback
     *
     * @ORM\Column(name="advisor_feedback", type="string", length=255, nullable=false)
     */
    private $advisorFeedback;

    /**
     * @var text $advisorComment
     *
     * @ORM\Column(name="advisor_comment", type="text", nullable=false)
     */
    private $advisorComment;

    /**
     * @var datetime $createdDate
     *
     * @ORM\Column(name="created_date", type="datetime", nullable=false)
     */
    private $createdDate;

    /**
     * @var integer $templateRequestId
     *
     * @ORM\Column(name="template_request_id", type="integer", nullable=false)
     */
    private $templateRequestId;

    /**
     * @var datetime $responseDate
     *
     * @ORM\Column(name="response_date", type="datetime", nullable=false)
     */
    private $responseDate;

    /**
     * @var integer $portfolioId
     *
     * @ORM\Column(name="portfolio_id", type="integer", nullable=false)
     */
    private $portfolioId;


    /**
     * Get requestId
     *
     * @return integer 
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * Set isCompleteByAdvisor
     *
     * @param string $isCompleteByAdvisor
     * @return GmaRequestFinancialAdvisor
     */
    public function setIsCompleteByAdvisor($isCompleteByAdvisor)
    {
        $this->isCompleteByAdvisor = $isCompleteByAdvisor;
        return $this;
    }

    /**
     * Get isCompleteByAdvisor
     *
     * @return string 
     */
    public function getIsCompleteByAdvisor()
    {
        return $this->isCompleteByAdvisor;
    }

    /**
     * Set isResponseByAdvisor
     *
     * @param string $isResponseByAdvisor
     * @return GmaRequestFinancialAdvisor
     */
    public function setIsResponseByAdvisor($isResponseByAdvisor)
    {
        $this->isResponseByAdvisor = $isResponseByAdvisor;
        return $this;
    }

    /**
     * Get isResponseByAdvisor
     *
     * @return string 
     */
    public function getIsResponseByAdvisor()
    {
        return $this->isResponseByAdvisor;
    }

    /**
     * Set advisorFeedback
     *
     * @param string $advisorFeedback
     * @return GmaRequestFinancialAdvisor
     */
    public function setAdvisorFeedback($advisorFeedback)
    {
        $this->advisorFeedback = $advisorFeedback;
        return $this;
    }

    /**
     * Get advisorFeedback
     *
     * @return string 
     */
    public function getAdvisorFeedback()
    {
        return $this->advisorFeedback;
    }

    /**
     * Set advisorComment
     *
     * @param text $advisorComment
     * @return GmaRequestFinancialAdvisor
     */
    public function setAdvisorComment($advisorComment)
    {
        $this->advisorComment = $advisorComment;
        return $this;
    }

    /**
     * Get advisorComment
     *
     * @return text 
     */
    public function getAdvisorComment()
    {
        return $this->advisorComment;
    }

    /**
     * Set createdDate
     *
     * @param datetime $createdDate
     * @return GmaRequestFinancialAdvisor
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
     * Set templateRequestId
     *
     * @param integer $templateRequestId
     * @return GmaRequestFinancialAdvisor
     */
    public function setTemplateRequestId($templateRequestId)
    {
        $this->templateRequestId = $templateRequestId;
        return $this;
    }

    /**
     * Get templateRequestId
     *
     * @return integer 
     */
    public function getTemplateRequestId()
    {
        return $this->templateRequestId;
    }

    /**
     * Set responseDate
     *
     * @param datetime $responseDate
     * @return GmaRequestFinancialAdvisor
     */
    public function setResponseDate($responseDate)
    {
        $this->responseDate = $responseDate;
        return $this;
    }

    /**
     * Get responseDate
     *
     * @return datetime 
     */
    public function getResponseDate()
    {
        return $this->responseDate;
    }

    /**
     * Set portfolioId
     *
     * @param integer $portfolioId
     * @return GmaRequestFinancialAdvisor
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