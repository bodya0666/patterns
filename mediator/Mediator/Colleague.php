<?php

namespace App\Mediator;

class Colleague
{
    /**
     * @var MediatorInterface
     */
    protected $mediator;

    public function setMediator(MediatorInterface $mediator): void
    {
        $this->mediator = $mediator;
    }
}