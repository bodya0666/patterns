<?php

namespace App\State;

class SecondStep extends State
{
    public function current(): void
    {
        $this->context->goTo($this);
    }

    public function next(): void
    {
        $this->context->goTo(new LastStep());
    }
}