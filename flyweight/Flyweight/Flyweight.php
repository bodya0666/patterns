<?php

namespace App\Flyweight;

class Flyweight
{
    protected $sharedState;

    public function __construct($sharedState)
    {
        $this->sharedState = $sharedState;
    }

    public function operation(): void
    {
        //TODO: Some code here(save to database or ...)
        echo "Save to database ...\n\r";
    }
}