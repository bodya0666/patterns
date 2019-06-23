<?php


namespace App\Creator;


class ConcreteCreator extends Creator
{

    public function factoryMethod(): File
    {
        return new ConcreteFile();
    }
}