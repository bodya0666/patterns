<?php

namespace App;

use App\Component\City;
use App\Component\Country;
use App\Component\State;
use App\Visitor\ConcreteVisitor;

include __DIR__ . '/vendor/autoload.php';

$london = new City('London', 8136000);
$liverpool = new City('Liverpool', 552267);

$sofia = new City('Sofia', 1236000);
$plovdiv = new City('Plovdiv', 671573);

$unitedKingdomState = new State('United Kingdom');
$unitedKingdomState->setCity($london);
$unitedKingdomState->setCity($liverpool);

$bulgariaState = new State('Bulgaria');
$bulgariaState->setCity($sofia);
$bulgariaState->setCity($plovdiv);

$unitedKingdom = new Country('United Kingdom');
$bulgaria = new Country('Bulgaria');

$unitedKingdom->setState($unitedKingdomState);
$bulgaria->setState($bulgariaState);

$visitor = new ConcreteVisitor();

var_dump($unitedKingdom->accept($visitor));
var_dump($bulgaria->accept($visitor));
