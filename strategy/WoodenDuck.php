<?php

namespace App;

use App\Fly\FlyInterface;
use App\Fly\NoFly;

class WoodenDuck extends BaseDuck
{
    public function __construct()
    {
        parent::__construct();
        $this->SetFly(new NoFly());
    }

    public function display()
    {
        return 'I\'m wooden duck';
    }
}