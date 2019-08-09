<?php

namespace App;

use App\Data\Data;
use App\Decorator\Validation;
use App\Validation\IsEmail;
use App\Validation\Number;

include __DIR__ . '/vendor/autoload.php';

$data = new Data('312');

$validation = new Validation();
$number = new Number($validation);
$not_empty = new IsEmail($number);
$not_empty->validation($data);

var_dump($data->getValid());