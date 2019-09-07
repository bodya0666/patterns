<?php

namespace App\Expression;

class Number implements ExpressionInterface
{
    /**
     * @var int
     */
    private $number;

    public function __construct($number)
    {
        $this->number = $number;
    }

    public function interpret()
    {
        return $this->number;
    }
}