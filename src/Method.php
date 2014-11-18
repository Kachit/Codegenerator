<?php
/**
 * Property
 *
 * @author Kachit
 */
class Method extends AbstractInternalMember implements MemberInternalInterface {

    protected $visibility;
    protected $return;
    protected $body;
    protected $arguments = [];
    protected $isStatic = false;
    protected $isFinal = false;
    protected $isAbstract = false;

    public function generate() {
        // TODO: Implement generate() method.
    }
}