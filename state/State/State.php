<?php

namespace App\State;

use App\Context\Context;

abstract class State
{
    /**
     * @var Context
     */
    protected $context;

    public function setContext(Context $context): void
    {
        $this->context = $context;
    }

    abstract public function current(): void;

    abstract public function next(): void;
}