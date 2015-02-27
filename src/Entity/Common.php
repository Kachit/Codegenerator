<?php
/**
 * Interface for internal items
 *
 * @author Kachit
 */
namespace Kachit\Codegenerator\Entity;

class Common implements EntityInterface {

    /**
     * @var string
     */
    protected $name;

    /**
     * @var int
     */
    protected $position;

    /**
     * @var mixed
     */
    protected $docBlock;

    /**
     * Get object ID
     *
     * @return mixed
     */
    public function getId() {
        return $this->getName();
    }


    /**
     * @return mixed
     */
    public function getDocBlock() {
        return $this->docBlock;
    }

    /**
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * @return int
     */
    public function getPosition() {
        return $this->position;
    }

    /**
     * Set DocBlock
     *
     * @param mixed $docBlock
     * @return $this
     */
    public function setDocBlock($docBlock) {
        $this->docBlock = $docBlock;
        return $this;
    }

    /**
     * Set Name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name) {
        $this->name = $name;
        return $this;
    }

    /**
     * Set Position
     *
     * @param int $position
     * @return $this
     */
    public function setPosition($position) {
        $this->position = (int)$position;
        return $this;
    }
} 