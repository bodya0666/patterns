<?php

namespace App\Context;

use App\State\State;

class Context
{
    /**
     * @var State
     */
    private $state;

    public function __construct(State $state)
    {
        $this->state = $state;

        $this->goTo($state);
    }

    public function goTo(State $state)
    {
        $this->state = $state;

        $this->state->setContext($this);
    }

    public function getState()
    {
        return get_class($this->state);
    }
}