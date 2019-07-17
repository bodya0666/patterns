<?php

namespace App\Facade;

use App\Model\ConcreteA;
use App\Model\ConcreteB;

class Facade
{
    public $concreteA;
    public $concreteB;

    public function __construct(ConcreteA $concreteA = null, ConcreteB $concreteB = null)
    {
        $this->concreteA = $concreteA ?: new ConcreteA();
        $this->concreteB = $concreteB ?: new ConcreteB();
    }
}