<?php

namespace Proxies\__CG__\Entities;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class GmaMasterRequestTemplate extends \Entities\GmaMasterRequestTemplate implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getTemplateRequestId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["templateRequestId"];
        }
        $this->__load();
        return parent::getTemplateRequestId();
    }

    public function setTemplateName($templateName)
    {
        $this->__load();
        return parent::setTemplateName($templateName);
    }

    public function getTemplateName()
    {
        $this->__load();
        return parent::getTemplateName();
    }

    public function setMailHeader($mailHeader)
    {
        $this->__load();
        return parent::setMailHeader($mailHeader);
    }

    public function getMailHeader()
    {
        $this->__load();
        return parent::getMailHeader();
    }

    public function setMailBody($mailBody)
    {
        $this->__load();
        return parent::setMailBody($mailBody);
    }

    public function getMailBody()
    {
        $this->__load();
        return parent::getMailBody();
    }

    public function setMailFrom($mailFrom)
    {
        $this->__load();
        return parent::setMailFrom($mailFrom);
    }

    public function getMailFrom()
    {
        $this->__load();
        return parent::getMailFrom();
    }

    public function setStatus($status)
    {
        $this->__load();
        return parent::setStatus($status);
    }

    public function getStatus()
    {
        $this->__load();
        return parent::getStatus();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'templateRequestId', 'templateName', 'mailHeader', 'mailBody', 'mailFrom', 'status');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields AS $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}