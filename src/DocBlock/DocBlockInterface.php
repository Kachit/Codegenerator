<?php
/**
 * DocBlockInterface
 *
 * @author Kachit
 */

namespace Kachit\Codegenerator\DocBlock;

use Kachit\Codegenerator\Entity\Collection;

interface DocBlockInterface {

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle();

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription();

    /**
     * Get tags
     *
     * @return Collection
     */
    public function getTags();
} 