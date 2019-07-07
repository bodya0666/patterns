<?php

namespace App;

include __DIR__ . '/vendor/autoload.php';

$config = Config::getInstance();

$config->setParams('login', 'user');

$config2 = Config::getInstance();
var_dump($config2->getParams());