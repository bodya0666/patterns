<?php

namespace App\Parsers;

use App\AbstractParser\AbstractParser;

class ConcreteParser1 extends AbstractParser
{
    public function getData()
    {
        return file_get_contents($this->url);
    }
}