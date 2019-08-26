<?php

namespace App;

use App\Memento\Caretaker;
use App\User\User;

include __DIR__ . '/vendor/autoload.php';

$user = new User();
$caretaker = new Caretaker($user);


$user->setUsername('vasya');
$caretaker->backup();

$user->setUsername('petya');

$caretaker->undo();

var_dump($user->getUsername());