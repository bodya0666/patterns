<?php

namespace App\Database;

use App\Mediator\Colleague;

class Server extends Colleague
{
    public function process()
    {
        return $this->mediator->sendResponse($this->mediator->queryDB());
    }
}