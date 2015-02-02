<?php
/**
 * Tag
 *
 * @author Kachit
 */
namespace Kachit\Codegenerator\DocBlock;

use Kachit\Codegenerator\Entity\EntityInterface;

class Tag implements EntityInterface {

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $type;

    /**
     * @var string
     */
    protected $comment;

    /**
     * @var int
     */
    protected $position;

    /**
     * Get Position
     *
     * @return int
     */
    public function getPosition() {
        return $this->position;
    }

    /**
     * Set Position
     *
     * @param int $position
     * @return $this
     */
    public function setPosition($position) {
        $this->position = $position;
        return $this;
    }

    /**
     * Get Comment
     *
     * @return string
     */
    public function getComment() {
        return $this->comment;
    }

    /**
     * Set Comment
     *
     * @param string $comment
     * @return $this
     */
    public function setComment($comment) {
        $this->comment = $comment;
        return $this;
    }

    /**
     * Get Name
     *
     * @return string
     */
    public function getName() {
        return $this->name;
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
     * Get Type
     *
     * @return string
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Set Type
     *
     * @param string $type
     * @return $this
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }
}