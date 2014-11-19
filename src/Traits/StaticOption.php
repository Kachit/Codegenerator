<?php
/**
 * FinalTrait
 *
 * @author antoxa <kornilov@realweb.ru>
 */
namespace Kachit\Codegenerator\Traits;

trait StaticOption {

    /**
     * @var bool
     */
    protected $static = false;

    /**
     * Is static
     *
     * @return bool
     */
    public function isStatic() {
        return $this->static;
    }

    /**
     * Set static
     *
     * @param bool $static
     * @return $this
     */
    public function setStatic($static = true) {
        $this->static = (bool)$static;
        return $this;
    }
} 