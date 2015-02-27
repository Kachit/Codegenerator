<?php
/**
 * ClassEntity
 *
 * @author antoxa <kornilov@realweb.ru>
 * @package Kachit\Codegenerator\Entity
 */
namespace Kachit\Codegenerator\Entity;

class Classes extends Common {

    /**
     * @var string
     */
    protected $extends;

    /**
     * @var string
     */
    protected $namespace;

    /**
     * @var Collection
     */
    protected $interfaces;

    /**
     * @var Collection
     */
    protected $uses;

    /**
     * @var Collection
     */
    protected $traits;

    /**
     * @var Collection
     */
    protected $methods;

    /**
     * @var Collection
     */
    protected $properties;

    /**
     * @var Collection
     */
    protected $constants;

    /**
     * Init
     */
    public function __construct() {
        $this->properties = new Collection();
        $this->methods = new Collection();
        $this->interfaces = new Collection();
        $this->traits = new Collection();
        $this->constants = new Collection();
        $this->uses = new Collection();
    }

    /**
     * Add property
     *
     * @param Property $property
     * @return $this
     */
    public function addProperty(Property $property){
        $this->properties->add($property);
        return $this;
    }

    /**
     * Add method
     *
     * @param Method $method
     * @return $this
     */
    public function addMethod(Method $method){
        $this->methods->add($method);
        return $this;
    }

    /**
     * Add constant
     *
     * @param Constant $constant
     * @return $this
     */
    public function addConstant(Constant $constant){
        $this->constants->add($constant);
        return $this;
    }

    /**
     * Add trait
     *
     * @param Traits $trait
     * @param bool $needUse
     * @return $this
     */
    public function addTrait(Traits $trait, $needUse = false){
        $this->traits->add($trait);
        if ($needUse) {
            $this->uses->add($trait);
        }
        return $this;
    }

    /**
     * Add interface
     *
     * @param EntityInterface $interface
     * @param bool $needUse
     * @return $this
     */
    public function addInterface(Interfaces $interface, $needUse = false){
        $this->traits->add($interface);
        if ($needUse) {
            $this->uses->add($interface);
        }
        return $this;
    }

    /**
     * Add use
     *
     * @param EntityInterface $use
     * @return $this
     */
    public function addUse(EntityInterface $use){
        $this->uses->add($use);
        return $this;
    }
} 