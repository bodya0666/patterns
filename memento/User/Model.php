<?php

namespace App\User;

use App\Memento\Memento;

interface Model
{
    public function save(): Memento;

    public function restore(Memento $memento): void;
}