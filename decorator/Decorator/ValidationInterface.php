<?php

namespace App\Decorator;

use App\Data\Data;

interface ValidationInterface
{
    public function validation(Data $data): Data;
}