<?php

namespace App\File;

interface File
{
    public function createName();

    public function createPath(): string;

    public function saveImage(string $name);
}