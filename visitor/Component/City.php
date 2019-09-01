<?php

namespace App\Component;

use App\Visitor\Visitor;

class City implements Component
{
    /**
     * @var string
     */
    protected $name;

    /**
     * @return int
     */
    protected $population;

    public function __construct(string $name, int $population)
    {
        $this->name = $name;
        $this->population = $population;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPopulation(): int
    {
        return $this->population;
    }

    public function accept(Visitor $visitor)
    {
        return $visitor->visitCity($this);
    }
}