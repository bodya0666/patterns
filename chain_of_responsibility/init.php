<?php

namespace App;

use App\Validation\IsEmail;
use App\Validation\IsNumeric;

include __DIR__ . '/vendor/autoload.php';

$numeric = new IsNumeric();
$email = new IsEmail();

$numeric->setNext($email);
$numeric->handle('wqe');

var_dump($numeric->getError());
