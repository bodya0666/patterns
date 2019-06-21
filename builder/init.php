<?php

namespace App;

use App\SQLbuilder\QueryBuilder;

include __DIR__ . 'vendor/autoload.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function clientCode(QueryBuilder $queryBuilder)
{
    // ...

    $query = $queryBuilder
        ->select("users", "name, email, password")
        ->where("age > 18")
        ->where("age < 30")
        ->limit(10, 20)
        ->getQuery();

    echo $query;

    // ...
}

clientCode(new QueryBuilder);