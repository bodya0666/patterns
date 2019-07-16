<?php

namespace App\Decorator;

use App\Data\Data;

class ValidationDecorator implements ValidationInterface
{
    protected $validation;

    public function __construct(ValidationInterface $validation)
    {
        $this->validation = $validation;
    }

    public function validation(Data $data): Data
    {
        return $this->validation->validation($data);
    }

}