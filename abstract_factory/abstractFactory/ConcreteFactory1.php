<?php

namespace App\abstractFactory;

use App\Product\AbstractProductA;
use App\Product\AbstractProductB;
use App\Product\ProductA1;
use App\Product\ProductB1;

class ConcreteFactory1 implements AbstractFactory
{
    public function createProductA(): AbstractProductA
    {
        return new ProductA1();
    }

    public function createProductB(): AbstractProductB
    {
        return new ProductB1();
    }
}