<?php

namespace App\Model;

class ConcreteB
{
    public function operation(): string
    {
        return 'It\'s class:' . static::class;
    }
}