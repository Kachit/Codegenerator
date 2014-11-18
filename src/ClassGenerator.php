<?php
/**
 * ClassGenerator
 *
 * @author Kachit
 */

class ClassGenerator extends AbstractMember implements MemberInterface {

    protected $extends;
    protected $isFinal = false;
    protected $isAbstract = false;
    protected $namespace;
    protected $interfaces = [];
    protected $uses = [];
    protected $traits = [];
    protected $methods = [];
    /**
     * @var MembersCollection
     */
    protected $properties;

    public function __construct() {
        $this->properties = new MembersCollection();
        $this->methods = new MembersCollection();
    }

    public function addProperty(Property $property){
        return $this->properties->addMember($property);
    }

    public function addMethod(Method $method){
        return $this->methods->addMember($method);
    }

    public function generate() {
        // TODO: Implement generate() method.
    }
}