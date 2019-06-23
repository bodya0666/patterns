<?php


namespace App\Creator;

use App\File\File;

class ConcreteCreator extends Creator
{

    public function factoryMethod(): File
    {
        return new ConcreteFile();
    }
}