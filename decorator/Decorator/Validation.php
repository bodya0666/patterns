<?php


namespace App\Decorator;

use App\Data\Data;

class Validation implements ValidationInterface
{
    public function validation(Data $data): Data
    {
        return $data;
    }

}