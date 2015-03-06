<?php
/**
 * ClassGenerator
 *
 * @author Kachit
 */
namespace Kachit\Codegenerator\Generator;

use Kachit\Codegenerator\Common\Collection;

class ClassItem {

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

    protected $formatter;

    public function generate() {

    }
}