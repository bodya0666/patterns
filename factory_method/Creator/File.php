<?php

namespace App\Creator;

interface File
{
    public function createName();

    public function createPath(): string;

    public function saveImage(string $name);
}