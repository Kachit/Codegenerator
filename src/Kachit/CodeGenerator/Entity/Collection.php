<?php
/**
 * Items collection
 *
 * @author Kachit
 */
namespace Kachit\Codegenerator\Entity;

class Collection implements \IteratorAggregate {

    /**
     * @var EntityInterface[]
     */
    protected $items = [];

    /**
     * Get iterator
     *
     * @return \ArrayIterator
     */
    public function getIterator() {
        return new \ArrayIterator($this->items);
    }

    /**
     * Set items
     *
     * @param EntityInterface[] $itemsList
     * @return $this;
     */
    public function fill(array $itemsList) {
        foreach ($itemsList as $item) {
            $this->add($item);
        }
        return $this;
    }

    /**
     * Get items
     *
     * @return EntityInterface[]
     */
    public function getList() {
        return $this->items;
    }

    /**
     * Get item
     *
     * @param string $name
     * @return EntityInterface
     */
    public function getOne($name) {
        return $this->items[$name];
    }

    /**
     * Has item
     *
     * @param string $name
     * @return bool
     */
    public function has($name) {
        return isset($this->items[$name]);
    }

    /**
     * Add item
     *
     * @param EntityInterface $item
     * @return $this
     */
    public function add(EntityInterface $item) {
        $this->items[$item->getName()] = $item;
        return $this;
    }
} 