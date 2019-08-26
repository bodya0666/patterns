<?php

namespace App\Memento;

interface Memento
{
    public function getDate(): int;

    public function getData();
}