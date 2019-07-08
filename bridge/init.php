<?php

namespace App;

use App\Page\AdvancedPage;
use App\Page\SimplePage;
use App\Renderer\HTMLRenderer;
use App\Renderer\jSONRenderer;

include __DIR__ . '/vendor/autoload.php';

$html = new HTMLRenderer();
$json = new jSONRenderer();

$test = new SimplePage($html, 'test', 'test');
$test2 = new AdvancedPage($json, 'title', 'content', 'http://image.jpg', 'example');

var_dump($test->view());
var_dump($test2->view());