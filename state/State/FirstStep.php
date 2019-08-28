<?php

namespace App\State;

class FirstStep extends State
{
    public function current(): void
    {
        $this->context->goTo($this);
    }

    public function next(): void
    {
        $this->context->goTo(new SecondStep());
    }
}