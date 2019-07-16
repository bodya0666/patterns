<?php

namespace App\Validation;

use App\Data\Data;
use App\Decorator\ValidationDecorator;

class NotEmpty extends ValidationDecorator
{
    public function validation(Data $data): Data
    {
        $data = parent::validation($data);
        empty($data->getData()) ? $data->setValid(false) : $data->setValid(true);

        return $data;
    }
}