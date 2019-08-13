<?php

namespace App;

use App\Skeleton\DirStructure;
use App\Skeleton\FileStructure;

include __DIR__ . '/vendor/autoload.php';


$test = new DirStructure();

$file = new FileStructure($test);

//$test->createStructure();