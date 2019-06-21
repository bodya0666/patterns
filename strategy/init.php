<?php
namespace App;

include __DIR__ . '/vendor/autoload.php';

$duck = new Duck();
$woodenDuck = new WoodenDuck();

var_dump($duck->GetFly());
var_dump($woodenDuck->GetFly());
