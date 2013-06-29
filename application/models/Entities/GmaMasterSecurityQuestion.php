<?php

namespace Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entities\GmaMasterSecurityQuestion
 *
 * @ORM\Table(name="gma_master_security_question")
 * @ORM\Entity
 */
class GmaMasterSecurityQuestion
{
    /**
     * @var integer $quesId
     *
     * @ORM\Column(name="ques_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="gma_master_security_question_ques_id_seq", allocationSize="1", initialValue="1")
     */
    private $quesId;

    /**
     * @var string $question
     *
     * @ORM\Column(name="question", type="string", length=255, nullable=true)
     */
    private $question;


    /**
     * Get quesId
     *
     * @return integer 
     */
    public function getQuesId()
    {
        return $this->quesId;
    }

    /**
     * Set question
     *
     * @param string $question
     * @return GmaMasterSecurityQuestion
     */
    public function setQuestion($question)
    {
        $this->question = $question;
        return $this;
    }

    /**
     * Get question
     *
     * @return string 
     */
    public function getQuestion()
    {
        return $this->question;
    }
}