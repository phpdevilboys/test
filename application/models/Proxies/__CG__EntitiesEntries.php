<?php

namespace Proxies\__CG__\Entities;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Entries extends \Entities\Entries implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setSlug($slug)
    {
        $this->__load();
        return parent::setSlug($slug);
    }

    public function getSlug()
    {
        $this->__load();
        return parent::getSlug();
    }

    public function setTitle($title)
    {
        $this->__load();
        return parent::setTitle($title);
    }

    public function getTitle()
    {
        $this->__load();
        return parent::getTitle();
    }

    public function setUrlTitle($urlTitle)
    {
        $this->__load();
        return parent::setUrlTitle($urlTitle);
    }

    public function getUrlTitle()
    {
        $this->__load();
        return parent::getUrlTitle();
    }

    public function setRequired($required)
    {
        $this->__load();
        return parent::setRequired($required);
    }

    public function getRequired()
    {
        $this->__load();
        return parent::getRequired();
    }

    public function setContentTypeId($contentTypeId)
    {
        $this->__load();
        return parent::setContentTypeId($contentTypeId);
    }

    public function getContentTypeId()
    {
        $this->__load();
        return parent::getContentTypeId();
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

    public function setMetaTitle($metaTitle)
    {
        $this->__load();
        return parent::setMetaTitle($metaTitle);
    }

    public function getMetaTitle()
    {
        $this->__load();
        return parent::getMetaTitle();
    }

    public function setMetaDescription($metaDescription)
    {
        $this->__load();
        return parent::setMetaDescription($metaDescription);
    }

    public function getMetaDescription()
    {
        $this->__load();
        return parent::getMetaDescription();
    }

    public function setMetaKeywords($metaKeywords)
    {
        $this->__load();
        return parent::setMetaKeywords($metaKeywords);
    }

    public function getMetaKeywords()
    {
        $this->__load();
        return parent::getMetaKeywords();
    }

    public function setCreatedDate($createdDate)
    {
        $this->__load();
        return parent::setCreatedDate($createdDate);
    }

    public function getCreatedDate()
    {
        $this->__load();
        return parent::getCreatedDate();
    }

    public function setModifiedDate($modifiedDate)
    {
        $this->__load();
        return parent::setModifiedDate($modifiedDate);
    }

    public function getModifiedDate()
    {
        $this->__load();
        return parent::getModifiedDate();
    }

    public function setAuthorId($authorId)
    {
        $this->__load();
        return parent::setAuthorId($authorId);
    }

    public function getAuthorId()
    {
        $this->__load();
        return parent::getAuthorId();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'slug', 'title', 'urlTitle', 'required', 'contentTypeId', 'status', 'metaTitle', 'metaDescription', 'metaKeywords', 'createdDate', 'modifiedDate', 'authorId');
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