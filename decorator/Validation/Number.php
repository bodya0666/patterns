<?php

namespace App\Validation;

use App\Data\Data;
use App\Decorator\ValidationDecorator;

class Number extends ValidationDecorator
{
    public function validation(Data $data): Data
    {
        $data = parent::validation($data);
        is_numeric($data->getData()) ? $data->setValid(true) : $data->setValid(false);

        return $data;
    }
}