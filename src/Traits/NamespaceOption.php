<?php
/**
 * ExtendsOption
 *
 * @author antoxa <kornilov@realweb.ru>
 * @package Kachit\Codegenerator\Traits
 */
namespace Kachit\Codegenerator\Traits;

trait NamespaceOption {

    /**
     * @var string
     */
    protected $namespace;

    /**
     * Get Namespace
     *
     * @return string
     */
    public function getNamespace() {
        return $this->namespace;
    }

    /**
     * Set Namespace
     *
     * @param string $namespace
     * @return $this
     */
    public function setNamespace($namespace) {
        $this->namespace = $namespace;
        return $this;
    }
} 