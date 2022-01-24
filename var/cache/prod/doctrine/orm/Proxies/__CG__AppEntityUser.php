<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class User extends \App\Entity\User implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Proxy\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array<string, null> properties to be lazy loaded, indexed by property name
     */
    public static $lazyPropertiesNames = array (
);

    /**
     * @var array<string, mixed> default values of properties to be lazy loaded, with keys being the property names
     *
     * @see \Doctrine\Common\Proxy\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array (
);



    public function __construct(?\Closure $initializer = null, ?\Closure $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'id', '' . "\0" . 'App\\Entity\\User' . "\0" . 'email', '' . "\0" . 'App\\Entity\\User' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'password', '' . "\0" . 'App\\Entity\\User' . "\0" . 'nome_proprio', '' . "\0" . 'App\\Entity\\User' . "\0" . 'nome_apelido', '' . "\0" . 'App\\Entity\\User' . "\0" . 'morada', '' . "\0" . 'App\\Entity\\User' . "\0" . 'cod_postal', '' . "\0" . 'App\\Entity\\User' . "\0" . 'carrinhos', '' . "\0" . 'App\\Entity\\User' . "\0" . 'ativo', '' . "\0" . 'App\\Entity\\User' . "\0" . 'localidade'];
        }

        return ['__isInitialized__', '' . "\0" . 'App\\Entity\\User' . "\0" . 'id', '' . "\0" . 'App\\Entity\\User' . "\0" . 'email', '' . "\0" . 'App\\Entity\\User' . "\0" . 'roles', '' . "\0" . 'App\\Entity\\User' . "\0" . 'password', '' . "\0" . 'App\\Entity\\User' . "\0" . 'nome_proprio', '' . "\0" . 'App\\Entity\\User' . "\0" . 'nome_apelido', '' . "\0" . 'App\\Entity\\User' . "\0" . 'morada', '' . "\0" . 'App\\Entity\\User' . "\0" . 'cod_postal', '' . "\0" . 'App\\Entity\\User' . "\0" . 'carrinhos', '' . "\0" . 'App\\Entity\\User' . "\0" . 'ativo', '' . "\0" . 'App\\Entity\\User' . "\0" . 'localidade'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (User $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy::$lazyPropertiesDefaults as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @deprecated no longer in use - generated code now relies on internal components rather than generated public API
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId(): ?int
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', []);

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail(string $email): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', [$email]);

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getUserIdentifier(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUserIdentifier', []);

        return parent::getUserIdentifier();
    }

    /**
     * {@inheritDoc}
     */
    public function getRoles(): array
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRoles', []);

        return parent::getRoles();
    }

    /**
     * {@inheritDoc}
     */
    public function setRoles(array $roles): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRoles', [$roles]);

        return parent::setRoles($roles);
    }

    /**
     * {@inheritDoc}
     */
    public function getPassword(): string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPassword', []);

        return parent::getPassword();
    }

    /**
     * {@inheritDoc}
     */
    public function setPassword(string $password): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPassword', [$password]);

        return parent::setPassword($password);
    }

    /**
     * {@inheritDoc}
     */
    public function eraseCredentials()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'eraseCredentials', []);

        return parent::eraseCredentials();
    }

    /**
     * {@inheritDoc}
     */
    public function getNomeProprio(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomeProprio', []);

        return parent::getNomeProprio();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomeProprio(string $nome_proprio): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomeProprio', [$nome_proprio]);

        return parent::setNomeProprio($nome_proprio);
    }

    /**
     * {@inheritDoc}
     */
    public function getNomeApelido(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNomeApelido', []);

        return parent::getNomeApelido();
    }

    /**
     * {@inheritDoc}
     */
    public function setNomeApelido(string $nome_apelido): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNomeApelido', [$nome_apelido]);

        return parent::setNomeApelido($nome_apelido);
    }

    /**
     * {@inheritDoc}
     */
    public function getMorada(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getMorada', []);

        return parent::getMorada();
    }

    /**
     * {@inheritDoc}
     */
    public function setMorada(?string $morada): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setMorada', [$morada]);

        return parent::setMorada($morada);
    }

    /**
     * {@inheritDoc}
     */
    public function getCodPostal(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCodPostal', []);

        return parent::getCodPostal();
    }

    /**
     * {@inheritDoc}
     */
    public function setCodPostal(?string $cod_postal): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCodPostal', [$cod_postal]);

        return parent::setCodPostal($cod_postal);
    }

    /**
     * {@inheritDoc}
     */
    public function getCarrinhos(): \Doctrine\Common\Collections\Collection
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCarrinhos', []);

        return parent::getCarrinhos();
    }

    /**
     * {@inheritDoc}
     */
    public function addCarrinho(\App\Entity\Carrinho $carrinho): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addCarrinho', [$carrinho]);

        return parent::addCarrinho($carrinho);
    }

    /**
     * {@inheritDoc}
     */
    public function removeCarrinho(\App\Entity\Carrinho $carrinho): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeCarrinho', [$carrinho]);

        return parent::removeCarrinho($carrinho);
    }

    /**
     * {@inheritDoc}
     */
    public function getAtivo(): ?bool
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getAtivo', []);

        return parent::getAtivo();
    }

    /**
     * {@inheritDoc}
     */
    public function setAtivo(?bool $ativo): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setAtivo', [$ativo]);

        return parent::setAtivo($ativo);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocalidade(): ?string
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocalidade', []);

        return parent::getLocalidade();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocalidade(?string $localidade): \App\Entity\User
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocalidade', [$localidade]);

        return parent::setLocalidade($localidade);
    }

}