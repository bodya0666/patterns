<?php

namespace App;

use App\Facade\Facade;

include __DIR__ . '/vendor/autoload.php';

$facade = new Facade();

var_dump($facade->concreteB->operation());