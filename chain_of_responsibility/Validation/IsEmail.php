<?php

namespace App\Validation;

use App\Handler\AbstractHandler;

class IsEmail extends AbstractHandler
{
    public function handle(string $data)
    {
        $result = false;

        if (!filter_var($data, FILTER_VALIDATE_EMAIL)) {
            $this->setError($data, "$data is no email");
            $result = "$data is no email";
        }
        parent::handle($data);

        return $result;
    }

}