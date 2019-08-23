<?php

namespace App\Database;

use App\Mediator\Colleague;

class Client extends Colleague
{
    public function request()
    {
        $this->mediator->makeRequest();
    }

    public function render($content)
    {
        return $content;
    }
}