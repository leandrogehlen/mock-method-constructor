<?php

namespace App;

use stdClass;

class SomeClass
{
    private $object;

    public function __construct()
    {
        $this->object = $this->createObject();
    }

    public function getObject()
    {
        return $this->object;
    }

    public function getObjectMockWork()
    {
        if ($this->object === null) {
            $this->object = $this->createObject();
        }
        return $this->object;
    }

    protected function createObject()
    {
        return new stdClass();
    }
}
