<?php

namespace App\State;

class LastStep extends State
{
    public function current(): void
    {
        $this->context->goTo($this);
    }

    public function next(): void
    {
        $this->context->goTo($this);
    }
}