<?php

namespace ContainerPSCBGJT;
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/PaginatorInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/knplabs/knp-components/src/Knp/Component/Pager/Paginator.php';

class PaginatorInterface_82dac15 implements \ProxyManager\Proxy\VirtualProxyInterface, \Knp\Component\Pager\PaginatorInterface
{
    /**
     * @var \Knp\Component\Pager\PaginatorInterface|null wrapped object, if the proxy is initialized
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

    public function paginate($target, int $page = 1, int $limit = 10, array $options = []) : \Knp\Component\Pager\Pagination\PaginationInterface
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, 'paginate', array('target' => $target, 'page' => $page, 'limit' => $limit, 'options' => $options), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        if ($this->valueHolderfc4fd === $returnValue = $this->valueHolderfc4fd->paginate($target, $page, $limit, $options)) {
            $returnValue = $this;
        }

        return $returnValue;
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

        $instance->initializer6df8f = $initializer;

        return $instance;
    }

    public function __construct()
    {
        static $reflection;

        if (! $this->valueHolderfc4fd) {
            $reflection = $reflection ?? new \ReflectionClass('Knp\\Component\\Pager\\PaginatorInterface');
            $this->valueHolderfc4fd = $reflection->newInstanceWithoutConstructor();
        }
    }

    public function & __get($name)
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, '__get', ['name' => $name], $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        if (isset(self::$publicPropertiesecb04[$name])) {
            return $this->valueHolderfc4fd->$name;
        }

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

    public function __set($name, $value)
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        $targetObject = $this->valueHolderfc4fd;

        $targetObject->$name = $value;

        return $targetObject->$name;
    }

    public function __isset($name)
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, '__isset', array('name' => $name), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        $targetObject = $this->valueHolderfc4fd;

        return isset($targetObject->$name);
    }

    public function __unset($name)
    {
        $this->initializer6df8f && ($this->initializer6df8f->__invoke($valueHolderfc4fd, $this, '__unset', array('name' => $name), $this->initializer6df8f) || 1) && $this->valueHolderfc4fd = $valueHolderfc4fd;

        $targetObject = $this->valueHolderfc4fd;

        unset($targetObject->$name);

return;
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

if (!\class_exists('PaginatorInterface_82dac15', false)) {
    \class_alias(__NAMESPACE__.'\\PaginatorInterface_82dac15', 'PaginatorInterface_82dac15', false);
}
