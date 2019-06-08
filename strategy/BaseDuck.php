<?php

namespace App;

use App\Fly\Fly;
use App\Fly\FlyInterface;
use App\Swim\Swim;
use App\Swim\SwimInterface;

abstract class BaseDuck
{
    /* In php 7.4+ this variables should be hinted  */
    private $fly;
    private $swim;

    public function __construct()
    {
        $this->fly = new Fly();
        $this->swim = new Swim;
    }

    public function SetFly(FlyInterface $fly)
    {
        $this->fly = $fly;
    }

    public function SetSwim(SwimInterface $swim)
    {
        $this->swim = $swim;
    }

    public function GetFly()
    {
        return $this->fly->fly();
    }

    public function GetSwim()
    {
        return $this->swim->swim();
    }

    abstract public function display();
}