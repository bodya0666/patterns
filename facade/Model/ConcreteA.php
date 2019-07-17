<?php

namespace App\Model;

class ConcreteA
{
    public function operation(): string
    {
        return 'It\'s class:' . static::class;
    }
}