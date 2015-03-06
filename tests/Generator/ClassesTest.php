<?php
/**
 * ClassesTest
 */
namespace Kachit\Codegenerator\Tests\Generator;

use Kachit\Codegenerator\Generator\ClassItem;

class ClassesTest extends \PHPUnit_Framework_TestCase {

    /**
     * @var ClassItem
     */
    private $testable;

    protected function setUp() {
        $this->testable = new ClassItem();
    }

    public function testFirst() {
        $this->assertEquals(1, 1);
    }
}
