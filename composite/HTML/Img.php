<?php

namespace App\HTML;

use App\Composite\HTMLElement;

class Img extends HTMLElement
{
    protected $alt;

    public function __construct($name, $content, $alt)
    {
        parent::__construct($name, $content);
        $this->alt = $alt;
    }

    public function render(): string
    {
        return "<img src='$this->content' alt='$this->alt'{$this->attribute}>";
    }
}