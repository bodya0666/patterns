<?php

namespace App\Validation;

use App\Handler\AbstractHandler;

class IsNumeric extends AbstractHandler
{
    public function handle(string $data)
    {
        $result = false;

        if (!is_numeric($data)) {
            $this->setError($data, "$data is not number");
            $result = "$data is not number";
        }
        parent::handle($data);

        return $result;
    }
}