<?php

namespace App\Skeleton;

class DirStructure extends Dir
{
    public function createStructure(): void
    {
        $i = null;

        while (file_exists($this->getBaseDir() . $i))
        {
            $i++;
        }
        $this->setBaseDir($this->getBaseDir() . $i);

        mkdir($this->getBaseDir());

        foreach ($this as $key => $dir)
        {
            mkdir($this->getBaseDir() . '/' . $dir);
        }
        $this->setGenerateStatus(true);
    }
}
