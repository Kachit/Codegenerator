<?php
/**
 * ExtendsOption
 *
 * @author antoxa <kornilov@realweb.ru>
 * @package Kachit\Codegenerator\Traits
 */
namespace Kachit\Codegenerator\Traits;

trait ExtendsOption {

    /**
     * @var string
     */
    protected $extends;

    /**
     * Get Extends
     *
     * @return string
     */
    public function getExtends() {
        return $this->extends;
    }

    /**
     * Set Extends
     *
     * @param string $extends
     * @return $this
     */
    public function setExtends($extends) {
        $this->extends = $extends;
        return $this;
    }
} 