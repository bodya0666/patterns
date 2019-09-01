<?php

namespace App;

use App\Parsers\ConcreteParser2;

include __DIR__ . '/vendor/autoload.php';

$parser = new ConcreteParser2('http://localhost/', 'GitHub');

var_dump($parser->parse());