<?php

namespace Kunstmaan\AdminBundle\Tests\Helper;

use Kunstmaan\AdminBundle\Helper\ClassLookup;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2012-09-12 at 11:16:18.
 */
class ClassLookupTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Kunstmaan\AdminBundle\Helper\ClassLookup::getClass
     */
    public function testGetClass()
    {
        $class = ClassLookup::getClass(new DummyClass());
        $this->assertEquals('Kunstmaan\AdminBundle\Tests\Helper\DummyClass', $class);
    }

    /**
     * @covers Kunstmaan\AdminBundle\Helper\ClassLookup::getClassName
     */
    public function testGetClassName()
    {
        $class = ClassLookup::getClassName(new DummyClass());
        $this->assertEquals('DummyClass', $class);
    }

}

class DummyClass
{

}
