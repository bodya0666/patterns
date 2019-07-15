<?php

namespace App\HTML;

use App\Composite\HTMLElement;

class H1 extends HTMLElement
{
    public function render(): string
    {
        return "<h1{$this->attribute}>{$this->content}</h1>";
    }
}