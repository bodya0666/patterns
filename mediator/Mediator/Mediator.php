<?php

namespace App\Mediator;

use App\Database\Client;
use App\Database\Database;
use App\Database\Server;

class Mediator implements MediatorInterface
{
    private $client;

    private $database;

    private $server;

    public function __construct(Client $client, Database $database, Server $server)
    {
        $this->client = $client;
        $this->database = $database;
        $this->server = $server;

        $this->client->setMediator($this);
        $this->database->setMediator($this);
        $this->server->setMediator($this);
    }

    public function sendResponse($content)
    {
        $this->client->render($content);
    }

    public function queryDB()
    {
        return $this->database->getData();
    }

    public function makeRequest()
    {
        $this->server->process();
    }
}