<?php
/**
 * FinalTrait
 *
 * @author antoxa <kornilov@realweb.ru>
 */
namespace Kachit\Codegenerator\Traits;

trait ValueTrait {

    /**
     * @var mixed
     */
    protected $value = null;

    /**
     * Get Value
     *
     * @return boolean
     */
    public function getValue() {
        return $this->value;
    }

    /**
     * Set Value
     *
     * @param boolean $value
     * @return $this
     */
    public function setValue($value) {
        $this->value = $value;
        return $this;
    }
} 