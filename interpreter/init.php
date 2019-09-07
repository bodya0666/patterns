<?php

namespace App;

include __DIR__ . '/vendor/autoload.php';

$test = new Context();

var_dump($test->evaluate('90-80+70')->interpret());