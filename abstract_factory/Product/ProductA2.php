<?php


namespace App\Product;


class ProductA2 implements AbstractProductA
{
    public function reallyUsefulMethod()
    {
        return 'Really useful method for product A2';
    }

    public function uselessMethod()
    {
        return 'Really useless method for product A2';
    }
}