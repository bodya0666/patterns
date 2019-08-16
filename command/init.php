<?php

namespace App;

use App\Command\CreateStructureCommand;
use App\Skeleton\DirStructure;

include __DIR__ . '/vendor/autoload.php';

$dir = new DirStructure();
$command = new CreateStructureCommand($dir);

$command->execute();