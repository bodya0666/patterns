<?php

namespace App;

use App\Database\Client;
use App\Database\Database;
use App\Database\Server;
use App\Mediator\Mediator;

include __DIR__ . '/vendor/autoload.php';

$client = new Client();
$database = new Database();
$server = new Server();

$mediator = new Mediator($client, $database, $server);

var_dump($mediator->makeRequest());