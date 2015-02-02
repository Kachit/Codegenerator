<?php
/**
 * Interface for internal entity
 *
 * @author Kachit
 */
namespace Kachit\Codegenerator\Entity;

interface EntityInterface {

    /**
     * @return string
     */
    public function getName();

    /**
     * @return int
     */
    public function getPosition();
} 