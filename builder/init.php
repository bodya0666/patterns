<?php

namespace App;

use App\SQLbuilder\QueryBuilder;

include __DIR__ . '/vendor/autoload.php';

$queryBuilder = new QueryBuilder();

$query = $queryBuilder
    ->select("users", "name, email, password")
    ->where("age > 18")
    ->where("age < 30")
    ->limit(10, 20)
    ->getQuery();

echo $query;
