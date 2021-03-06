<?php

namespace Proxies;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class HorarioProxy extends \Horario implements \Doctrine\ORM\Proxy\Proxy
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
    
    
    public function getId()
    {
        $this->__load();
        return parent::getId();
    }

    public function setNome($nome)
    {
        $this->__load();
        return parent::setNome($nome);
    }

    public function getNome()
    {
        $this->__load();
        return parent::getNome();
    }

    public function setDescricao($descricao)
    {
        $this->__load();
        return parent::setDescricao($descricao);
    }

    public function getDescricao()
    {
        $this->__load();
        return parent::getDescricao();
    }

    public function setValor($valor)
    {
        $this->__load();
        return parent::setValor($valor);
    }

    public function getValor()
    {
        $this->__load();
        return parent::getValor();
    }

    public function setCreateAt($createAt)
    {
        $this->__load();
        return parent::setCreateAt($createAt);
    }

    public function getCreateAt()
    {
        $this->__load();
        return parent::getCreateAt();
    }

    public function setModifyAt($modifyAt)
    {
        $this->__load();
        return parent::setModifyAt($modifyAt);
    }

    public function getModifyAt()
    {
        $this->__load();
        return parent::getModifyAt();
    }

    public function setAtivo($ativo)
    {
        $this->__load();
        return parent::setAtivo($ativo);
    }

    public function getAtivo()
    {
        $this->__load();
        return parent::getAtivo();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'nome', 'descricao', 'valor', 'createAt', 'modifyAt', 'ativo');
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