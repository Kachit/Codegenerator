<?php
/**
 * VisibilityTrait
 *
 * @author Kachit
 */
namespace Kachit\Codegenerator\Traits;

use Kachit\Codegenerator\Constants;

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
     * Set public visibility
     *
     * @return $this;
     */
    public function setPublicVisibility() {
        return $this->setVisibility(Constants::VISIBILITY_PUBLIC);
    }

    /**
     * Set protected visibility
     *
     * @return $this;
     */
    public function setProtectedVisibility() {
        return $this->setVisibility(Constants::VISIBILITY_PROTECTED);
    }

    /**
     * Set private visibility
     *
     * @return $this;
     */
    public function setPrivateVisibility() {
        return $this->setVisibility(Constants::VISIBILITY_PRIVATE);
    }

    /**
     * Get Visibility
     *
     * @return mixed
     */
    public function getVisibility() {
        return $this->visibility;
    }

    /**
     * Is public visibility
     *
     * @return bool
     */
    public function isPublicVisibility() {
        return ($this->visibility == Constants::VISIBILITY_PUBLIC);
    }

    /**
     * Is protected visibility
     *
     * @return bool
     */
    public function isProtectedVisibility() {
        return ($this->visibility == Constants::VISIBILITY_PROTECTED);
    }

    /**
     * Is private visibility
     *
     * @return bool
     */
    public function isPrivateVisibility() {
        return ($this->visibility == Constants::VISIBILITY_PRIVATE);
    }
} 