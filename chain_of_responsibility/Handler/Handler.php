<?php

namespace App\Handler;

interface Handler
{
    public function setNext(Handler $handler): Handler;

    public function handle(string $data);
}