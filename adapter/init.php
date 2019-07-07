<?php

namespace App;

include __DIR__ . '/vendor/autoload.php';

$adapter = new Adapter();

$adapter->messageAdapter('test.test@gmail.com');