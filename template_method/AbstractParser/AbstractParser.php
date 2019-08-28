<?php

namespace App\AbstractParser;

abstract class AbstractParser
{
    /**
     * @var string
     */
    protected $url;

    protected $data;

    protected $search;

    public function __construct(string $url, string $search)
    {
        $this->url = $url;
        $this->search = $search;
    }

    abstract public function getData();

    public function find()
    {
        return strpos($this->data, $this->search) ? true : false;
    }

    public function parse()
    {
        $this->getData();

        return $this->find();
    }
}