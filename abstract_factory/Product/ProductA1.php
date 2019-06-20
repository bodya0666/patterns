<?php


namespace App\Product;


class ProductA1 implements AbstractProductA
{
    public function reallyUsefulMethod()
    {
        return 'Really useful method for product A1';
    }

    public function uselessMethod()
    {
        return 'Really useless method for product A1';
    }
}