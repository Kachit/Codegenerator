<?php
/**
 * FinalTrait
 *
 * @author antoxa <kornilov@realweb.ru>
 */
namespace Kachit\Codegenerator\Traits;

trait FinalTrait {

    /**
     * @var bool
     */
    protected $final = false;

    /**
     * Get Final
     *
     * @return boolean
     */
    public function isFinal() {
        return $this->final;
    }

    /**
     * Set Final
     *
     * @param boolean $final
     * @return $this
     */
    public function setFinal($final = true) {
        $this->final = (bool)$final;
        return $this;
    }
} 