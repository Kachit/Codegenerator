<?php
/**
 * Property
 *
 * @author antoxa <kornilov@realweb.ru>
 * @package Kachit\Codegenerator\Entity
 */
namespace Kachit\Codegenerator\Entity;

use Kachit\Codegenerator\Traits\AbstractTrait;
use Kachit\Codegenerator\Traits\FinalTrait;
use Kachit\Codegenerator\Traits\VisibilityTrait;
use Kachit\Codegenerator\Traits\StaticOption;

class Method extends Common {

    use VisibilityTrait;
    use StaticOption;
    use FinalTrait;
    use AbstractTrait;

    /**
     * @var
     */
    protected $body;

    /**
     * @var Collection
     */
    protected $arguments;

    /**
     *
     */
    public function __construct() {
        $this->arguments = new Collection();
    }
}