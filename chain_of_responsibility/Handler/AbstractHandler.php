<?php

namespace App\Handler;

abstract class AbstractHandler implements Handler
{
    // in php 7.4 should be hinted
    /**
     * @var Handler
     */
    private $nextHandler;

    /**
     * @var array
     */
    private $error = [];

    public function setNext(Handler $handler): Handler
    {
        return $this->nextHandler = $handler;
    }

    public function handle(string $data)
    {
        if ($this->nextHandler) {
            $result = $this->nextHandler->handle($data);
            if ($result) {
                $this->setError($data, $result);
            }
        }
    }

    public function getError(): array
    {
        return $this->error;
    }

    public function setError(string $dataName, string $error): void
    {
        if (isset($this->error[$dataName])) {
            array_push($this->error[$dataName], $error);
        } else {
            $this->error[$dataName] = [$error];
        }
    }

}