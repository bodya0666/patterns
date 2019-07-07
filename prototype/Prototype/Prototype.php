<?php

namespace App\Prototype;

class Prototype
{
    public $primitive;
    public $component;

    public function __clone()
    {
        $this->component = clone $this->component;
    }

}