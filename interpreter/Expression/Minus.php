<?php


namespace App\Expression;


class Minus implements ExpressionInterface
{
    /**
     * @var ExpressionInterface
     */
    private $left;
    /**
     * @var ExpressionInterface
     */
    private $right;

    public function __construct(ExpressionInterface $left, ExpressionInterface $right)
    {
        $this->left = $left;
        $this->right = $right;
    }

    public function interpret()
    {
        return $this->left->interpret() - $this->right->interpret();
    }
}