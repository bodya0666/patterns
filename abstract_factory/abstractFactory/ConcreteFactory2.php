<?php

namespace App\abstractFactory;

use App\Product\AbstractProductA;
use App\Product\AbstractProductB;
use App\Product\ProductA2;
use App\Product\ProductB2;

class ConcreteFactory2 implements AbstractFactory
{
    public function createProductA(): AbstractProductA
    {
        return new ProductA2();
    }

    public function createProductB(): AbstractProductB
    {
        return new ProductB2();
    }
}