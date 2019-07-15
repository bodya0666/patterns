<?php

namespace App\HTML;

use App\Composite\HTMLComposite;

class A extends HTMLComposite
{
    public function render(): string
    {
        $output = parent::render();
        return "<a href='{$this->content}'{$this->attribute}>$output</a>";
    }
}
