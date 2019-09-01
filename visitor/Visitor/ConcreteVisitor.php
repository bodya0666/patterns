<?php

namespace App\Visitor;

use App\Component\City;
use App\Component\Country;
use App\Component\State;

class ConcreteVisitor implements  Visitor
{

    public function visitCountry(Country $country)
    {
            $states = [];
            /**
             * @var $state State
             */
            foreach ($country->getState() as $key=>$state)
            {
                $states[$state->getName()] = $state->getCity();
            }

            return $states;
    }

    public function visitState(State $state)
    {
        return $state->getCity();
    }

    public function visitCity(City $city)
    {
        return $city->getName();
    }
}