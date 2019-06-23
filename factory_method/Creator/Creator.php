<?php

namespace App\Creator;

abstract class Creator
{
    abstract public function factoryMethod(): File;

    public function saveFile($name)
    {
        $file = $this->factoryMethod();

        $file->createName();
        $file->createPath();
        $file->saveImage($name);

        return $file->createPath();
    }
}