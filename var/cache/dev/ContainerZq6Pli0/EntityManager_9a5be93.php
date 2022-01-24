<?php

namespace ContainerZq6Pli0;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderdf861 = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer61c8d = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties4e036 = [
        
    ];

    public function getConnection()
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, 'getConnection', array(), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        return $this->valueHolderdf861->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, 'getMetadataFactory', array(), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        return $this->valueHolderdf861->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, 'getExpressionBuilder', array(), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        return $this->valueHolderdf861->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, 'beginTransaction', array(), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        return $this->valueHolderdf861->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, 'getCache', array(), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        return $this->valueHolderdf861->getCache();
    }

    public function transactional($func)
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, 'transactional', array('func' => $func), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        return $this->valueHolderdf861->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, 'wrapInTransaction', array('func' => $func), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        return $this->valueHolderdf861->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, 'commit', array(), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        return $this->valueHolderdf861->commit();
    }

    public function rollback()
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, 'rollback', array(), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        return $this->valueHolderdf861->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, 'getClassMetadata', array('className' => $className), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        return $this->valueHolderdf861->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, 'createQuery', array('dql' => $dql), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        return $this->valueHolderdf861->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, 'createNamedQuery', array('name' => $name), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        return $this->valueHolderdf861->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        return $this->valueHolderdf861->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        return $this->valueHolderdf861->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, 'createQueryBuilder', array(), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        return $this->valueHolderdf861->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, 'flush', array('entity' => $entity), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        return $this->valueHolderdf861->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        return $this->valueHolderdf861->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        return $this->valueHolderdf861->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        return $this->valueHolderdf861->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, 'clear', array('entityName' => $entityName), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        return $this->valueHolderdf861->clear($entityName);
    }

    public function close()
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, 'close', array(), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        return $this->valueHolderdf861->close();
    }

    public function persist($entity)
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, 'persist', array('entity' => $entity), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        return $this->valueHolderdf861->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, 'remove', array('entity' => $entity), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        return $this->valueHolderdf861->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, 'refresh', array('entity' => $entity), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        return $this->valueHolderdf861->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, 'detach', array('entity' => $entity), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        return $this->valueHolderdf861->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, 'merge', array('entity' => $entity), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        return $this->valueHolderdf861->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        return $this->valueHolderdf861->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        return $this->valueHolderdf861->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, 'getRepository', array('entityName' => $entityName), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        return $this->valueHolderdf861->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, 'contains', array('entity' => $entity), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        return $this->valueHolderdf861->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, 'getEventManager', array(), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        return $this->valueHolderdf861->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, 'getConfiguration', array(), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        return $this->valueHolderdf861->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, 'isOpen', array(), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        return $this->valueHolderdf861->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, 'getUnitOfWork', array(), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        return $this->valueHolderdf861->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        return $this->valueHolderdf861->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        return $this->valueHolderdf861->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, 'getProxyFactory', array(), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        return $this->valueHolderdf861->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, 'initializeObject', array('obj' => $obj), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        return $this->valueHolderdf861->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, 'getFilters', array(), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        return $this->valueHolderdf861->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, 'isFiltersStateClean', array(), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        return $this->valueHolderdf861->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, 'hasFilters', array(), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        return $this->valueHolderdf861->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer61c8d = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderdf861) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderdf861 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderdf861->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, '__get', ['name' => $name], $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        if (isset(self::$publicProperties4e036[$name])) {
            return $this->valueHolderdf861->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdf861;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderdf861;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdf861;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderdf861;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, '__isset', array('name' => $name), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdf861;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderdf861;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, '__unset', array('name' => $name), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderdf861;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderdf861;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, '__clone', array(), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        $this->valueHolderdf861 = clone $this->valueHolderdf861;
    }

    public function __sleep()
    {
        $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, '__sleep', array(), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;

        return array('valueHolderdf861');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer61c8d = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer61c8d;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer61c8d && ($this->initializer61c8d->__invoke($valueHolderdf861, $this, 'initializeProxy', array(), $this->initializer61c8d) || 1) && $this->valueHolderdf861 = $valueHolderdf861;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderdf861;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderdf861;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
