<?php

namespace App\Skeleton;

class DirStructure extends Dir
{
    public function createStructure()
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

    public function getStructure()
    {
        return clone $this;
    }
}
