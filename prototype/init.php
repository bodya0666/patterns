<?php

namespace App;

use App\Prototype\Prototype;

include __DIR__ . '/vendor/autoload.php';

$prototype = new Prototype();

$prototype->primitive = 12;
$prototype->component = new \DateTime();

$result = clone $prototype;

var_dump($result);