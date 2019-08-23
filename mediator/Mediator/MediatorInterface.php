<?php

namespace App\Mediator;

interface MediatorInterface
{
    public function sendResponse($content);

    public function queryDB();

    public function makeRequest();
}