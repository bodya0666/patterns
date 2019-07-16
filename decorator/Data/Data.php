<?php

namespace App\Data;

class Data
{
    protected $data;
    protected $valid = true;

    public function __construct(string $data)
    {
        $this->data = $data;
    }

    public function setValid($valid): void
    {
        if ($this->valid) {
            $this->valid = $valid;
        }
    }

    public function getValid(): bool
    {
        return $this->valid;
    }

    public function getData(): string
    {
        return $this->data;
    }
}