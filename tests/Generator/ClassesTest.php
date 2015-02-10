<?php
/**
 * ClassesTest
 */
namespace Kachit\Codegenerator\Tests\Generator;

use Kachit\Codegenerator\Generator\Classes;

class ClassesTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var Classes
     */
    private $testable;

    protected function setUp() {
        $this->testable = new Classes();
    }

    public function testFirst() {
        $this->assertEquals(1, 1);
    }
}
