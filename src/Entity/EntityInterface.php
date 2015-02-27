<?php
/**
 * Interface for internal entity
 *
 * @author Kachit
 */
namespace Kachit\Codegenerator\Entity;

use Kachit\Collection\ItemInterface;

interface EntityInterface extends ItemInterface {

    /**
     * @return string
     */
    public function getName();

    /**
     * @return int
     */
    public function getPosition();
} 