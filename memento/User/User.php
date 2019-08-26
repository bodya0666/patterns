<?php

namespace App\User;

use App\Memento\ConcreteMemento;
use App\Memento\Memento;

class User implements Model
{
    /**
     * @var string
     */
    private $username = '';

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username): void
    {
        $this->username = $username;
    }

    public function save(): Memento
    {
        return new ConcreteMemento($this->username);
    }

    public function restore(Memento $memento): void
    {
        $this->username = $memento->getData();
    }
}