<?php

namespace App\SQLbuilder;

interface QueryBuilderInterface
{
    public function select(string $table, string $fields): QueryBuilderInterface;

    public function where(string $value): QueryBuilderInterface;

    public function limit(int $start, int $offset): QueryBuilderInterface;

    public function getQuery(): string;
}