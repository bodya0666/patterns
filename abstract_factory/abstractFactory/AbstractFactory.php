<?php

namespace App\abstractFactory;

use App\Product\AbstractProductA;
use App\Product\AbstractProductB;

interface AbstractFactory
{
    public function createProductA(): AbstractProductA;

    public function createProductB(): AbstractProductB;
}