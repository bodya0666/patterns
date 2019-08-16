<?php

namespace App\Skeleton;

abstract class Dir
{
    private $baseDir = 'Structure';

    private $generateStatus = false;

    protected $controller = 'Controller';

    protected $model = 'Model';

    protected $view = 'View';

    protected $public = 'public';

    abstract public function createStructure(): void;

    public function getGenerateStatus(): bool
    {
        return $this->generateStatus;
    }

    public function setGenerateStatus(bool $generateStatus): void
    {
        $this->generateStatus = $generateStatus;
    }

    public function setBaseDir(string $baseDir): void
    {
        $this->baseDir = $baseDir;
    }

    public function getBaseDir(): string
    {
        return $this->baseDir;
    }

    public function getController(): string
    {
        return $this->controller;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function getView(): string
    {
        return $this->view;
    }

    public function getPublic(): string
    {
        return $this->public;
    }
}