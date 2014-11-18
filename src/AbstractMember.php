<?php
/**
 * Member
 *
 * @author Kachit
 */
abstract class AbstractMember {

    protected $word;
    protected $name;
    protected $docBlock;

    /**
     * Set DocBlock
     *
     * @param mixed $docBlock
     * @return $this;
     */
    public function setDocBlock($docBlock) {
        $this->docBlock = $docBlock;
        return $this;
    }

    /**
     * Get DocBlock
     *
     * @return mixed
     */
    public function getDocBlock() {
        return $this->docBlock;
    }

    /**
     * Set Name
     *
     * @param mixed $name
     * @return $this;
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Get Name
     *
     * @return mixed
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Get Word
     *
     * @return string
     */
    public function getWord() {
        return $this->word;
    }
} 