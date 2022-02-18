<?php

namespace ContainerSWHUxse;

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder86a9f = null;
    private $initializerda212 = null;
    private static $publicProperties42558 = [
        
    ];
    public function getConnection()
    {
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, 'getConnection', array(), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        return $this->valueHolder86a9f->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, 'getMetadataFactory', array(), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        return $this->valueHolder86a9f->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, 'getExpressionBuilder', array(), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        return $this->valueHolder86a9f->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, 'beginTransaction', array(), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        return $this->valueHolder86a9f->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, 'getCache', array(), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        return $this->valueHolder86a9f->getCache();
    }
    public function transactional($func)
    {
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, 'transactional', array('func' => $func), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        return $this->valueHolder86a9f->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, 'wrapInTransaction', array('func' => $func), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        return $this->valueHolder86a9f->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, 'commit', array(), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        return $this->valueHolder86a9f->commit();
    }
    public function rollback()
    {
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, 'rollback', array(), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        return $this->valueHolder86a9f->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, 'getClassMetadata', array('className' => $className), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        return $this->valueHolder86a9f->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, 'createQuery', array('dql' => $dql), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        return $this->valueHolder86a9f->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, 'createNamedQuery', array('name' => $name), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        return $this->valueHolder86a9f->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        return $this->valueHolder86a9f->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        return $this->valueHolder86a9f->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, 'createQueryBuilder', array(), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        return $this->valueHolder86a9f->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, 'flush', array('entity' => $entity), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        return $this->valueHolder86a9f->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        return $this->valueHolder86a9f->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        return $this->valueHolder86a9f->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        return $this->valueHolder86a9f->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, 'clear', array('entityName' => $entityName), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        return $this->valueHolder86a9f->clear($entityName);
    }
    public function close()
    {
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, 'close', array(), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        return $this->valueHolder86a9f->close();
    }
    public function persist($entity)
    {
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, 'persist', array('entity' => $entity), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        return $this->valueHolder86a9f->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, 'remove', array('entity' => $entity), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        return $this->valueHolder86a9f->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, 'refresh', array('entity' => $entity), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        return $this->valueHolder86a9f->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, 'detach', array('entity' => $entity), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        return $this->valueHolder86a9f->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, 'merge', array('entity' => $entity), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        return $this->valueHolder86a9f->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        return $this->valueHolder86a9f->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        return $this->valueHolder86a9f->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, 'getRepository', array('entityName' => $entityName), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        return $this->valueHolder86a9f->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, 'contains', array('entity' => $entity), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        return $this->valueHolder86a9f->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, 'getEventManager', array(), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        return $this->valueHolder86a9f->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, 'getConfiguration', array(), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        return $this->valueHolder86a9f->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, 'isOpen', array(), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        return $this->valueHolder86a9f->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, 'getUnitOfWork', array(), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        return $this->valueHolder86a9f->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        return $this->valueHolder86a9f->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        return $this->valueHolder86a9f->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, 'getProxyFactory', array(), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        return $this->valueHolder86a9f->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, 'initializeObject', array('obj' => $obj), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        return $this->valueHolder86a9f->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, 'getFilters', array(), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        return $this->valueHolder86a9f->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, 'isFiltersStateClean', array(), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        return $this->valueHolder86a9f->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, 'hasFilters', array(), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        return $this->valueHolder86a9f->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerda212 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder86a9f) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder86a9f = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder86a9f->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, '__get', ['name' => $name], $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        if (isset(self::$publicProperties42558[$name])) {
            return $this->valueHolder86a9f->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder86a9f;
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
        $targetObject = $this->valueHolder86a9f;
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
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder86a9f;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder86a9f;
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
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, '__isset', array('name' => $name), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder86a9f;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder86a9f;
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
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, '__unset', array('name' => $name), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder86a9f;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder86a9f;
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
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, '__clone', array(), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        $this->valueHolder86a9f = clone $this->valueHolder86a9f;
    }
    public function __sleep()
    {
        $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, '__sleep', array(), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
        return array('valueHolder86a9f');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerda212 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerda212;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerda212 && ($this->initializerda212->__invoke($valueHolder86a9f, $this, 'initializeProxy', array(), $this->initializerda212) || 1) && $this->valueHolder86a9f = $valueHolder86a9f;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder86a9f;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder86a9f;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
