<?php

namespace App\Creator;

use App\File\File;
use App\File\ConcreteFile;

class ConcreteCreator extends Creator
{

    public function factoryMethod(): File
    {
        return new ConcreteFile();
    }
}