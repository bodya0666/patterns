<?php

namespace App\HTML;

use App\Composite\HTMLElement;

class P extends HTMLElement
{
    public function render(): string
    {
        return "<p{$this->attribute}>{$this->content}</p>";
    }

}