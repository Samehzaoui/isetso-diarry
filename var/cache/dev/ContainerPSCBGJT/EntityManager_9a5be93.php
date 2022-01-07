<?php

namespace ContainerPSCBGJT;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderfc4fd = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer6df8f = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicPropertiesecb04 = [
        
    ];

    public function getConnection()
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, 'getConnection', array(), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        return $this->valueHolderfc4fd->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, 'getMetadataFactory', array(), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        return $this->valueHolderfc4fd->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, 'getExpressionBuilder', array(), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        return $this->valueHolderfc4fd->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, 'beginTransaction', array(), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        return $this->valueHolderfc4fd->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, 'getCache', array(), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        return $this->valueHolderfc4fd->getCache();
    }

    public function transactional($func)
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, 'transactional', array('func' => $func), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        return $this->valueHolderfc4fd->transactional($func);
    }

    public function commit()
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, 'commit', array(), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        return $this->valueHolderfc4fd->commit();
    }

    public function rollback()
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, 'rollback', array(), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        return $this->valueHolderfc4fd->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, 'getClassMetadata', array('className' => $className), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        return $this->valueHolderfc4fd->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, 'createQuery', array('dql' => $dql), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        return $this->valueHolderfc4fd->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, 'createNamedQuery', array('name' => $name), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        return $this->valueHolderfc4fd->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        return $this->valueHolderfc4fd->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        return $this->valueHolderfc4fd->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, 'createQueryBuilder', array(), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        return $this->valueHolderfc4fd->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, 'flush', array('entity' => $entity), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        return $this->valueHolderfc4fd->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        return $this->valueHolderfc4fd->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        return $this->valueHolderfc4fd->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        return $this->valueHolderfc4fd->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, 'clear', array('entityName' => $entityName), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        return $this->valueHolderfc4fd->clear($entityName);
    }

    public function close()
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, 'close', array(), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        return $this->valueHolderfc4fd->close();
    }

    public function persist($entity)
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, 'persist', array('entity' => $entity), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        return $this->valueHolderfc4fd->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, 'remove', array('entity' => $entity), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        return $this->valueHolderfc4fd->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, 'refresh', array('entity' => $entity), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        return $this->valueHolderfc4fd->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, 'detach', array('entity' => $entity), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        return $this->valueHolderfc4fd->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, 'merge', array('entity' => $entity), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        return $this->valueHolderfc4fd->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        return $this->valueHolderfc4fd->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        return $this->valueHolderfc4fd->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        return $this->valueHolderfc4fd->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, 'contains', array('entity' => $entity), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        return $this->valueHolderfc4fd->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, 'getEventManager', array(), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        return $this->valueHolderfc4fd->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, 'getConfiguration', array(), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        return $this->valueHolderfc4fd->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, 'isOpen', array(), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        return $this->valueHolderfc4fd->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, 'getUnitOfWork', array(), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        return $this->valueHolderfc4fd->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        return $this->valueHolderfc4fd->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        return $this->valueHolderfc4fd->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, 'getProxyFactory', array(), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        return $this->valueHolderfc4fd->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, 'initializeObject', array('obj' => $obj), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        return $this->valueHolderfc4fd->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, 'getFilters', array(), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        return $this->valueHolderfc4fd->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, 'isFiltersStateClean', array(), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        return $this->valueHolderfc4fd->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, 'hasFilters', array(), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        return $this->valueHolderfc4fd->hasFilters();
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

        $instance->initializer6df8f = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderfc4fd) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderfc4fd = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderfc4fd->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, '__get', ['name' => $name], $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        if (isset(self::$publicPropertiesecb04[$name])) {
            return $this->valueHolderfc4fd->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfc4fd;

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

        $targetObject = $this->valueHolderfc4fd;
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
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfc4fd;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderfc4fd;
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
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, '__isset', array('name' => $name), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfc4fd;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderfc4fd;
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
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, '__unset', array('name' => $name), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderfc4fd;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderfc4fd;
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
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, '__clone', array(), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        $this->valueHolderfc4fd = clone $this->valueHolderfc4fd;
    }

    public function __sleep()
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, '__sleep', array(), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        return array('valueHolderfc4fd');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6df8f = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6df8f;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, 'initializeProxy', array(), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderfc4fd;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderfc4fd;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
