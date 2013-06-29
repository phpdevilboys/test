<?php

namespace Proxies\__CG__\Entities;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class GmaUser extends \Entities\GmaUser implements \Doctrine\ORM\Proxy\Proxy
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

    
    public function getUserId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["userId"];
        }
        $this->__load();
        return parent::getUserId();
    }

    public function setEmailId($emailId)
    {
        $this->__load();
        return parent::setEmailId($emailId);
    }

    public function getEmailId()
    {
        $this->__load();
        return parent::getEmailId();
    }

    public function setPassword($password)
    {
        $this->__load();
        return parent::setPassword($password);
    }

    public function getPassword()
    {
        $this->__load();
        return parent::getPassword();
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

    public function setFirstName($firstName)
    {
        $this->__load();
        return parent::setFirstName($firstName);
    }

    public function getFirstName()
    {
        $this->__load();
        return parent::getFirstName();
    }

    public function setLastName($lastName)
    {
        $this->__load();
        return parent::setLastName($lastName);
    }

    public function getLastName()
    {
        $this->__load();
        return parent::getLastName();
    }

    public function setMobileNum($mobileNum)
    {
        $this->__load();
        return parent::setMobileNum($mobileNum);
    }

    public function getMobileNum()
    {
        $this->__load();
        return parent::getMobileNum();
    }

    public function setSecEmailId($secEmailId)
    {
        $this->__load();
        return parent::setSecEmailId($secEmailId);
    }

    public function getSecEmailId()
    {
        $this->__load();
        return parent::getSecEmailId();
    }

    public function setSuffix($suffix)
    {
        $this->__load();
        return parent::setSuffix($suffix);
    }

    public function getSuffix()
    {
        $this->__load();
        return parent::getSuffix();
    }

    public function setGender($gender)
    {
        $this->__load();
        return parent::setGender($gender);
    }

    public function getGender()
    {
        $this->__load();
        return parent::getGender();
    }

    public function setAddressLine1($addressLine1)
    {
        $this->__load();
        return parent::setAddressLine1($addressLine1);
    }

    public function getAddressLine1()
    {
        $this->__load();
        return parent::getAddressLine1();
    }

    public function setAddressLine2($addressLine2)
    {
        $this->__load();
        return parent::setAddressLine2($addressLine2);
    }

    public function getAddressLine2()
    {
        $this->__load();
        return parent::getAddressLine2();
    }

    public function setCity($city)
    {
        $this->__load();
        return parent::setCity($city);
    }

    public function getCity()
    {
        $this->__load();
        return parent::getCity();
    }

    public function setState($state)
    {
        $this->__load();
        return parent::setState($state);
    }

    public function getState()
    {
        $this->__load();
        return parent::getState();
    }

    public function setZipCode($zipCode)
    {
        $this->__load();
        return parent::setZipCode($zipCode);
    }

    public function getZipCode()
    {
        $this->__load();
        return parent::getZipCode();
    }

    public function setSecurityQues1($securityQues1)
    {
        $this->__load();
        return parent::setSecurityQues1($securityQues1);
    }

    public function getSecurityQues1()
    {
        $this->__load();
        return parent::getSecurityQues1();
    }

    public function setSecurityAns1($securityAns1)
    {
        $this->__load();
        return parent::setSecurityAns1($securityAns1);
    }

    public function getSecurityAns1()
    {
        $this->__load();
        return parent::getSecurityAns1();
    }

    public function setSecurityQues2($securityQues2)
    {
        $this->__load();
        return parent::setSecurityQues2($securityQues2);
    }

    public function getSecurityQues2()
    {
        $this->__load();
        return parent::getSecurityQues2();
    }

    public function setSecurityAns2($securityAns2)
    {
        $this->__load();
        return parent::setSecurityAns2($securityAns2);
    }

    public function getSecurityAns2()
    {
        $this->__load();
        return parent::getSecurityAns2();
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

    public function setIsEmailVarified($isEmailVarified)
    {
        $this->__load();
        return parent::setIsEmailVarified($isEmailVarified);
    }

    public function getIsEmailVarified()
    {
        $this->__load();
        return parent::getIsEmailVarified();
    }

    public function setIsReceiveMail($isReceiveMail)
    {
        $this->__load();
        return parent::setIsReceiveMail($isReceiveMail);
    }

    public function getIsReceiveMail()
    {
        $this->__load();
        return parent::getIsReceiveMail();
    }

    public function setIsActive($isActive)
    {
        $this->__load();
        return parent::setIsActive($isActive);
    }

    public function getIsActive()
    {
        $this->__load();
        return parent::getIsActive();
    }

    public function setIsAgreeTAndC($isAgreeTAndC)
    {
        $this->__load();
        return parent::setIsAgreeTAndC($isAgreeTAndC);
    }

    public function getIsAgreeTAndC()
    {
        $this->__load();
        return parent::getIsAgreeTAndC();
    }

    public function setIsCompleteProfile($isCompleteProfile)
    {
        $this->__load();
        return parent::setIsCompleteProfile($isCompleteProfile);
    }

    public function getIsCompleteProfile()
    {
        $this->__load();
        return parent::getIsCompleteProfile();
    }

    public function setDateOfBirth($dateOfBirth)
    {
        $this->__load();
        return parent::setDateOfBirth($dateOfBirth);
    }

    public function getDateOfBirth()
    {
        $this->__load();
        return parent::getDateOfBirth();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'userId', 'emailId', 'password', 'title', 'firstName', 'lastName', 'mobileNum', 'secEmailId', 'suffix', 'gender', 'addressLine1', 'addressLine2', 'city', 'state', 'zipCode', 'securityQues1', 'securityAns1', 'securityQues2', 'securityAns2', 'createdDate', 'isEmailVarified', 'isReceiveMail', 'isActive', 'isAgreeTAndC', 'isCompleteProfile', 'dateOfBirth');
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