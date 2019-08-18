<?php

namespace App;

include __DIR__ . '/vendor/autoload.php';

$collection = new CustomIterator(true);
$collection->setItems("First");
$collection->setItems("Second");
$collection->setItems("Third");

foreach ($collection as $item) {
    echo $item . "\n";
}
