<?php
/**
 * VisibilityTrait
 *
 * @author Kachit
 */
trait VisibilityTrait {

    /**
     * @var string
     */
    protected $visibility = Constants::VISIBILITY_PUBLIC;

    /**
     * Set Visibility
     *
     * @param mixed $visibility
     * @return $this;
     */
    public function setVisibility($visibility) {
        $this->visibility = $visibility;
        return $this;
    }

    /**
     * Get Visibility
     *
     * @return mixed
     */
    public function getVisibility() {
        return $this->visibility;
    }

    public function isPublic() {
        return ($this->visibility == Constants::VISIBILITY_PUBLIC);
    }

    public function isProtected() {
        return ($this->visibility == Constants::VISIBILITY_PROTECTED);
    }

    public function isPrivate() {
        return ($this->visibility == Constants::VISIBILITY_PRIVATE);
    }
} 