<?php

namespace App;

use App\HTML\A;
use App\HTML\Div;
use App\HTML\H1;
use App\HTML\HTML;
use App\HTML\Img;
use App\HTML\P;

include __DIR__ . '/vendor/autoload.php';

/*
 * include HTML structure and tags: div, a, img, h1 (only content), p (only content)
 */

$html = new HTML('html', 'title');
$h1 = new H1('h1', 'Header');
$a = new A('a', 'https://example.com');
$p = new P('p', 'description');
$div = new Div('div', '');
$img = new Img('image', 'image.png', 'image');

$div->add($p);
$div->add($img);
$div->setCompositeAttribute('class="test"');

$a->add($h1);

$html->add($a);
$html->add($h1);
$html->add($div);
$html->add($img);
$html->remove('a');
$html->setAttribute(['a' => ['h1' => 'class="test"', 'a' => 'class="test"'], 'div' => ['p' => 'class="wrapper"', 'image' => 'id="image"']]);

var_dump($html->render());