<?php
/**
 * Property
 *
 * @author antoxa <kornilov@realweb.ru>
 * @package Kachit\Codegenerator\Entity
 */
namespace Kachit\Codegenerator\Entity;

use Kachit\Codegenerator\Traits\VisibilityTrait;
use Kachit\Codegenerator\Traits\ValueTrait;
use Kachit\Codegenerator\Traits\StaticOption;

class Property extends Common {

    use VisibilityTrait;
    use ValueTrait;
    use StaticOption;
}