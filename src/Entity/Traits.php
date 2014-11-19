<?php
/**
 * ClassEntity
 *
 * @author antoxa <kornilov@realweb.ru>
 * @package Kachit\Codegenerator\Entity
 */
namespace Kachit\Codegenerator\Entity;

class Traits extends Common {

    /**
     * @var Collection
     */
    protected $uses;

    /**
     * @var Collection
     */
    protected $methods;

    /**
     * Init
     */
    public function __construct() {
        $this->properties = new Collection();
        $this->methods = new Collection();
        $this->constants = new Collection();
        $this->uses = new Collection();
    }

    /**
     * Add property
     *
     * @param EntityInterface $property
     * @return $this
     */
    public function addProperty(EntityInterface $property){
        $this->properties->add($property);
        return $this;
    }

    /**
     * Add method
     *
     * @param EntityInterface $method
     * @return $this
     */
    public function addMethod(EntityInterface $method){
        $this->methods->add($method);
        return $this;
    }

    /**
     * Add constant
     *
     * @param EntityInterface $constant
     * @return $this
     */
    public function addConstant(EntityInterface $constant){
        $this->constants->add($constant);
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