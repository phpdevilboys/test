<?php

namespace Proxies\__CG__\Entities;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class NavigationItems extends \Entities\NavigationItems implements \Doctrine\ORM\Proxy\Proxy
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

    public function setType($type)
    {
        $this->__load();
        return parent::setType($type);
    }

    public function getType()
    {
        $this->__load();
        return parent::getType();
    }

    public function setEntryId($entryId)
    {
        $this->__load();
        return parent::setEntryId($entryId);
    }

    public function getEntryId()
    {
        $this->__load();
        return parent::getEntryId();
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

    public function setUrl($url)
    {
        $this->__load();
        return parent::setUrl($url);
    }

    public function getUrl()
    {
        $this->__load();
        return parent::getUrl();
    }

    public function setTagId($tagId)
    {
        $this->__load();
        return parent::setTagId($tagId);
    }

    public function getTagId()
    {
        $this->__load();
        return parent::getTagId();
    }

    public function setClass($class)
    {
        $this->__load();
        return parent::setClass($class);
    }

    public function getClass()
    {
        $this->__load();
        return parent::getClass();
    }

    public function setTarget($target)
    {
        $this->__load();
        return parent::setTarget($target);
    }

    public function getTarget()
    {
        $this->__load();
        return parent::getTarget();
    }

    public function setParentId($parentId)
    {
        $this->__load();
        return parent::setParentId($parentId);
    }

    public function getParentId()
    {
        $this->__load();
        return parent::getParentId();
    }

    public function setNavigationId($navigationId)
    {
        $this->__load();
        return parent::setNavigationId($navigationId);
    }

    public function getNavigationId()
    {
        $this->__load();
        return parent::getNavigationId();
    }

    public function setSubnavVisibility($subnavVisibility)
    {
        $this->__load();
        return parent::setSubnavVisibility($subnavVisibility);
    }

    public function getSubnavVisibility()
    {
        $this->__load();
        return parent::getSubnavVisibility();
    }

    public function setHide($hide)
    {
        $this->__load();
        return parent::setHide($hide);
    }

    public function getHide()
    {
        $this->__load();
        return parent::getHide();
    }

    public function setDisableCurrent($disableCurrent)
    {
        $this->__load();
        return parent::setDisableCurrent($disableCurrent);
    }

    public function getDisableCurrent()
    {
        $this->__load();
        return parent::getDisableCurrent();
    }

    public function setDisableCurrentTrail($disableCurrentTrail)
    {
        $this->__load();
        return parent::setDisableCurrentTrail($disableCurrentTrail);
    }

    public function getDisableCurrentTrail()
    {
        $this->__load();
        return parent::getDisableCurrentTrail();
    }

    public function setSort($sort)
    {
        $this->__load();
        return parent::setSort($sort);
    }

    public function getSort()
    {
        $this->__load();
        return parent::getSort();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'type', 'entryId', 'title', 'url', 'tagId', 'class', 'target', 'parentId', 'navigationId', 'subnavVisibility', 'hide', 'disableCurrent', 'disableCurrentTrail', 'sort');
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