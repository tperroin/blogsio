<?php

namespace Proxies\__CG__\Application\Sonata\MediaBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Gallery extends \Application\Sonata\MediaBundle\Entity\Gallery implements \Doctrine\ORM\Proxy\Proxy
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

    public function prePersist()
    {
        $this->__load();
        return parent::prePersist();
    }

    public function preUpdate()
    {
        $this->__load();
        return parent::preUpdate();
    }

    public function setName($name)
    {
        $this->__load();
        return parent::setName($name);
    }

    public function getName()
    {
        $this->__load();
        return parent::getName();
    }

    public function setEnabled($enabled)
    {
        $this->__load();
        return parent::setEnabled($enabled);
    }

    public function getEnabled()
    {
        $this->__load();
        return parent::getEnabled();
    }

    public function setUpdatedAt(\DateTime $updatedAt = NULL)
    {
        $this->__load();
        return parent::setUpdatedAt($updatedAt);
    }

    public function getUpdatedAt()
    {
        $this->__load();
        return parent::getUpdatedAt();
    }

    public function setCreatedAt(\DateTime $createdAt = NULL)
    {
        $this->__load();
        return parent::setCreatedAt($createdAt);
    }

    public function getCreatedAt()
    {
        $this->__load();
        return parent::getCreatedAt();
    }

    public function setDefaultFormat($defaultFormat)
    {
        $this->__load();
        return parent::setDefaultFormat($defaultFormat);
    }

    public function getDefaultFormat()
    {
        $this->__load();
        return parent::getDefaultFormat();
    }

    public function setGalleryHasMedias($galleryHasMedias)
    {
        $this->__load();
        return parent::setGalleryHasMedias($galleryHasMedias);
    }

    public function getGalleryHasMedias()
    {
        $this->__load();
        return parent::getGalleryHasMedias();
    }

    public function addGalleryHasMedias(\Sonata\MediaBundle\Model\GalleryHasMediaInterface $galleryHasMedia)
    {
        $this->__load();
        return parent::addGalleryHasMedias($galleryHasMedia);
    }

    public function __toString()
    {
        $this->__load();
        return parent::__toString();
    }

    public function setContext($context)
    {
        $this->__load();
        return parent::setContext($context);
    }

    public function getContext()
    {
        $this->__load();
        return parent::getContext();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'name', 'context', 'defaultFormat', 'enabled', 'updatedAt', 'createdAt', 'id', 'galleryHasMedias');
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
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}