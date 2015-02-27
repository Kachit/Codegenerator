<?php
/**
 * Items collection
 *
 * @author Kachit
 */
namespace Kachit\Codegenerator\Entity;

use Kachit\Collection\Collection as BaseCollection;

class Collection extends BaseCollection {

    /**
     * Add item
     *
     * @param EntityInterface $item
     * @return $this
     */
    public function add(EntityInterface $item) {
        return parent::add($item);
    }
} 