<?php

namespace App\Memento;

use App\User\Model;

class Caretaker
{
    /**
     * @var array
     */
    private $mementos = [];

    /**
     * @var Model
     */
    private $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function backup()
    {
        $this->mementos[] = $this->model->save();
    }

    public function undo()
    {
        if (!$this->mementos)
        {
            return false;
        }

        try {
            $this->model->restore(array_pop($this->mementos));
        } catch (\Exception $e) {
            $this->undo();
        }
    }

    /**
     * @return array
     */
    public function getMementos(): array
    {
        return $this->mementos;
    }
}