<?php
/**
 * File
 *
 * @author antoxa <kornilov@realweb.ru>
 * @package Kachit\Codegenerator
 */
namespace Kachit\Codegenerator;

use Kachit\Codegenerator\Entity\Collection;

class File implements GeneratorInterface {

    /**
     * @var Collection
     */
    protected $classes;

    /**
     * Init
     */
    public function __construct() {
        $this->classes = new Collection();
    }

    public function addClass($class) {
        return $this->classes->add($class);
    }

    public function setClasses(Collection $classes) {
        $this->classes->append($classes);
    }

    /**
     * Generate class code
     */
    public function generate() {

    }
} 