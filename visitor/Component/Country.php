<?php

namespace App\Component;

use App\Visitor\Visitor;

class Country implements Component
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var array
     */
    protected $state = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getState(): array
    {
        return $this->state;
    }

    public function setState(State $state): void
    {
        $this->state[] = $state;
    }

    public function accept(Visitor $visitor)
    {
        return $visitor->visitCountry($this);
    }

}