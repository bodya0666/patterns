<?php

namespace App\Skeleton;

class FileStructure
{
    protected $dirStructure;

    public function __construct(Dir $dirStructure)
    {
        $this->dirStructure = $dirStructure;
    }

    public function createFileStructure(): void
    {
        if ($this->dirStructure->getGenerateStatus()) {
            fopen($this->dirStructure->getBaseDir() . '/' . $this->dirStructure->getController() . '/' . 'MainController.php', 'w');
            fopen($this->dirStructure->getBaseDir() . '/' . $this->dirStructure->getModel() . '/' . 'User.php', 'w');
            fopen($this->dirStructure->getBaseDir() . '/' . $this->dirStructure->getView() . '/' . 'index.php', 'w');
            fopen($this->dirStructure->getBaseDir() . '/' . $this->dirStructure->getPublic() . '/' . 'index.php', 'w');
        }
    }
}