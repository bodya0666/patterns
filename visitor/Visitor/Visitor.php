<?php

namespace App\Visitor;

use App\Component\Country;
use App\Component\State;
use App\Component\City;

interface Visitor
{
    public function visitCountry(Country $country);

    public function visitState(State $state);

    public function visitCity(City $city);
}