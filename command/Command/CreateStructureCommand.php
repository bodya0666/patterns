<?php

namespace App\Command;

use App\Skeleton\Dir;
use App\Skeleton\FileStructure;

class CreateStructureCommand implements Command
{
    // in php 7.4 should be hint
    /**
     * @var Dir $dir
     */
    protected $dir;

    public function __construct(Dir $dir)
    {
        $this->dir = $dir;
    }

    public function execute()
    {
        $this->dir->createStructure();
        $fileStructure = new FileStructure($this->dir);
        $fileStructure->createFileStructure();
    }
}