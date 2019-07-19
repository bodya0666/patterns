<?php

namespace App\Factory;

use App\Flyweight\Flyweight;

class FlyweightFactory
{
    protected $flyweight;

    public function __construct(array $flyweights)
    {
        foreach ($flyweights as $key => $state)
        {
            $this->flyweight[$this->hashKey($state)] = new Flyweight($state);
        }
    }

    public function getFlyweight(array $sharedState): Flyweight
    {
        $key = $this->hashKey($sharedState);

        if (!isset($this->flyweight[$key])) {
            $this->flyweight[$key] = new Flyweight($sharedState);
        }

        return$this->flyweight[$key];
    }

    private function hashKey(array $state): string
    {
        ksort($state);

        return implode('_', $state);
    }

    public function list()
    {
        return $this->flyweight;
    }
}