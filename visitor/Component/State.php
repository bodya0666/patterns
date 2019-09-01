<?php

namespace App\Component;

use App\Visitor\Visitor;

class State implements Component
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @var array
     */
    protected $city = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    public function getCity(): array
    {
        return $this->city;
    }

    public function setCity(City $city): void
    {
        $this->city[] = $city;
    }

    public function accept(Visitor $visitor)
    {
        return $visitor->visitState($this);
    }
}