<?php

namespace App\Creator;

class ConcreteFile implements File
{
    protected $name;

    protected $path;

    public function createName()
    {
        $this->name = md5(uniqid());
    }

    public function createPath(): string
    {
        $filename = './images';

        if (!file_exists($filename)) {
            mkdir($filename);
        }
        $this->path = $filename;

        return $filename;
    }

    public function saveImage(string $name)
    {
        $path = $_FILES[$name]['name'];
        $ext = pathinfo($path, PATHINFO_EXTENSION);
        $uploadFile = $this->path . '/' . $this->name . '.' . $ext;
        $tmp_name = $_FILES[$name]['tmp_name'];
        move_uploaded_file($tmp_name, $uploadFile);
    }
}