<?php

namespace Tests;

use App\SomeClass;
use PHPUnit\Framework\TestCase;
use stdClass;

class SomeClassTest extends TestCase
{

    public function testMock()
    {
        /**@var $mock SomeClass */
        $mock = $this->getMockBuilder(SomeClass::class)
            ->onlyMethods(['createObject'])
            ->getMock();

        $obj = new stdClass();
        $obj->name = 'Bill';

        $mock->method('createObject')->willReturn($obj);

        $this->assertEquals($obj, $mock->getObject());

    }

    public function testMockWorking()
    {
        /**@var $mock SomeClass */
        $mock = $this->getMockBuilder(SomeClass::class)
            ->onlyMethods(['createObject'])
            ->getMock();

        $obj = new stdClass();
        $obj->name = 'Bill';

        $mock->method('createObject')->willReturn($obj);

        $this->assertEquals($obj, $mock->getObjectMockWork());

    }

}
