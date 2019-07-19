<?php

namespace App;

use App\Factory\FlyweightFactory;

include __DIR__ . '/vendor/autoload.php';

$factory = new FlyweightFactory([
    ['BMW', 'M5', 'red'],
    ['BMW', 'X6', 'white'],
]);

var_dump($factory->list());

$flyweight = $factory->getFlyweight(['BMW', 'M5', 'red']);

$flyweight->operation();

$flyweight2 = $factory->getFlyweight(['BMW', 'X1', 'white']);

$flyweight2->operation();