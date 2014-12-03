<?php
/**
 * Common
 *
 * @author antoxa <kornilov@realweb.ru>
 * @package DocBlock
 */
namespace Kachit\Codegenerator\DocBlock;

use Kachit\Codegenerator\Entity\Collection;

class Common implements DocBlockInterface {

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $description;

    /**
     * @var Collection
     */
    protected $tags;

    /**
     * Init
     */
    public function __construct() {
        $this->tags = new Collection();
    }

    /**
     * Add tag
     *
     * @param Tag $tag
     * @return $this
     */
    public function addTag(Tag $tag) {
        $this->tags->add($tag);
        return $this;
    }

    /**
     * Get Description
     *
     * @return string
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * Set Description
     *
     * @param string $description
     * @return $this
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Get Tags
     *
     * @return Collection
     */
    public function getTags() {
        return $this->tags;
    }

    /**
     * Get Title
     *
     * @return string
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * Set Title
     *
     * @param string $title
     * @return $this
     */
    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }
} 