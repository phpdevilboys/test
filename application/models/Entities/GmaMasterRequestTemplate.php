<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\GmaMasterRequestTemplate
 *
 * @ORM\Table(name="gma_master_request_template")
 * @ORM\Entity
 */
class GmaMasterRequestTemplate
{
    /**
     * @var integer $templateRequestId
     *
     * @ORM\Column(name="template_request_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gma_master_request_template_template_request_id_seq", allocationSize="1", initialValue="1")
     */
    private $templateRequestId;

    /**
     * @var string $templateName
     *
     * @ORM\Column(name="template_name", type="string", length=150, nullable=true)
     */
    private $templateName;

    /**
     * @var string $mailHeader
     *
     * @ORM\Column(name="mail_header", type="string", length=150, nullable=true)
     */
    private $mailHeader;

    /**
     * @var text $mailBody
     *
     * @ORM\Column(name="mail_body", type="text", nullable=true)
     */
    private $mailBody;

    /**
     * @var string $mailFrom
     *
     * @ORM\Column(name="mail_from", type="string", length=150, nullable=true)
     */
    private $mailFrom;

    /**
     * @var string $status
     *
     * @ORM\Column(name="status", type="string", length=255, nullable=true)
     */
    private $status;


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
     * Set templateName
     *
     * @param string $templateName
     * @return GmaMasterRequestTemplate
     */
    public function setTemplateName($templateName)
    {
        $this->templateName = $templateName;
        return $this;
    }

    /**
     * Get templateName
     *
     * @return string 
     */
    public function getTemplateName()
    {
        return $this->templateName;
    }

    /**
     * Set mailHeader
     *
     * @param string $mailHeader
     * @return GmaMasterRequestTemplate
     */
    public function setMailHeader($mailHeader)
    {
        $this->mailHeader = $mailHeader;
        return $this;
    }

    /**
     * Get mailHeader
     *
     * @return string 
     */
    public function getMailHeader()
    {
        return $this->mailHeader;
    }

    /**
     * Set mailBody
     *
     * @param text $mailBody
     * @return GmaMasterRequestTemplate
     */
    public function setMailBody($mailBody)
    {
        $this->mailBody = $mailBody;
        return $this;
    }

    /**
     * Get mailBody
     *
     * @return text 
     */
    public function getMailBody()
    {
        return $this->mailBody;
    }

    /**
     * Set mailFrom
     *
     * @param string $mailFrom
     * @return GmaMasterRequestTemplate
     */
    public function setMailFrom($mailFrom)
    {
        $this->mailFrom = $mailFrom;
        return $this;
    }

    /**
     * Get mailFrom
     *
     * @return string 
     */
    public function getMailFrom()
    {
        return $this->mailFrom;
    }

    /**
     * Set status
     *
     * @param string $status
     * @return GmaMasterRequestTemplate
     */
    public function setStatus($status)
    {
        $this->status = $status;
        return $this;
    }

    /**
     * Get status
     *
     * @return string 
     */
    public function getStatus()
    {
        return $this->status;
    }
}