<?php

namespace App\SQLbuilder;

class QueryBuilder implements QueryBuilderInterface
{
    protected $query;

    protected function reset(): void
    {
        $this->query = new \stdClass();
    }

    public function select(string $table, string $fields): QueryBuilderInterface
    {
        $this->reset();
        $this->query->base = "SELECT $fields FROM $table";

        return $this;
    }

    public function where(string $value): QueryBuilderInterface
    {
        $this->query->where[] = $value;

        return $this;
    }

    public function limit(int $start, int $offset): QueryBuilderInterface
    {
        $this->query->limit = "LIMIT $start, $offset";

        return $this;
    }

    public function getQuery(): string
    {
        $query = $this->query;

        $sql = $this->query->base;

        if (!empty($query->where)) {
            $sql .= " WHERE " . implode(' AND ', $query->where);
        }

        if (isset($query->limit)) {
            $sql .= $query->limit;
        }

        $sql .= ';';

        return $sql;
    }
}
