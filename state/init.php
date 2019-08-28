<?php

namespace App;

use App\State\FirstStep;
use App\Context\Context;
use App\State\LastStep;
use App\State\SecondStep;

include __DIR__ . '/vendor/autoload.php';

$context = new Context(new FirstStep());
var_dump($context->getState());

$context->goTo(new SecondStep());
var_dump($context->getState());

$context->goTo(new LastStep());
var_dump($context->getState());
