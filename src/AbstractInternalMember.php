<?php
/**
 * Member
 *
 * @author Kachit
 */

abstract class AbstractInternalMember extends AbstractMember {

    protected $position = 1;

    /**
     * Set Position
     *
     * @param int $position
     * @return $this;
     */
    public function setPosition($position) {
        $this->position = $position;
        return $this;
    }

    /**
     * Get Position
     *
     * @return int
     */
    public function getPosition() {
        return $this->position;
    }
} 