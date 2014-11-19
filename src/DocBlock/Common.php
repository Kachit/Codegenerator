<?php
/**
 * Common
 *
 * @author antoxa <kornilov@realweb.ru>
 * @package DocBlock
 */
namespace Kachit\Codegenerator\DocBlock;

use Kachit\Codegenerator\Entity\Collection;

class Common {

    protected $title;
    protected $description;
    protected $tags;

    /**
     * Init
     */
    public function __construct() {
        $this->tags = new Collection();
    }
} 