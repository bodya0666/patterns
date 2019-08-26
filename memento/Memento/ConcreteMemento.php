<?php

namespace App\Memento;

class ConcreteMemento implements Memento
{
    /**
     * @var int
     */
    private $date;

    /**
     * @var mixed
     */
    private $data;

    public function __construct($data)
    {
        $this->date = time();
        $this->data = $data;
    }

    public function getDate(): int
    {
        return $this->date;
    }

    public function getData()
    {
        return $this->data;
    }
}