<?php

namespace App;

use App\Page\SimplePage;
use App\Renderer\HTMLRenderer;

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include __DIR__ . '/vendor/autoload.php';

$html = new HTMLRenderer();

$test = new SimplePage($html, 'test', 'test');


var_dump($test);