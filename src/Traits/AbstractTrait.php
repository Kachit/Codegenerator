<?php
/**
 * FinalTrait
 *
 * @author antoxa <kornilov@realweb.ru>
 */
namespace Kachit\Codegenerator\Traits;

trait AbstractTrait {

    /**
     * @var bool
     */
    protected $abstract = false;

    /**
     * Is abstract
     *
     * @return boolean
     */
    public function isAbstract() {
        return $this->abstract;
    }

    /**
     * Set abstract
     *
     * @param boolean $abstract
     * @return $this
     */
    public function setAbstract($abstract = true) {
        $this->abstract = (bool)$abstract;
        return $this;
    }


} 