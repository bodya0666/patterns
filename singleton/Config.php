<?php

namespace App;

class Config extends Singleton
{
    private $params = [];

    public function getParams(): array
    {
        return $this->params;
    }

    public function setParams(string $key, string $value): void
    {
        $this->params[$key] = $value;
    }
}