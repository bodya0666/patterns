<?php

namespace App;

use App\abstractFactory\AbstractFactory;
use App\abstractFactory\ConcreteFactory1;
use App\abstractFactory\ConcreteFactory2;

include __DIR__ . '/vendor/autoload.php';

function clientCode(AbstractFactory $factory)
{
    $productA = $factory->createProductA();
    $productB = $factory->createProductB();

    echo $productA->uselessMethod() . "<br>";
    echo $productB->reallyUsefulMethod() . "\n";
}
clientCode(new ConcreteFactory2());