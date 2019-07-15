<?php

namespace App\HTML;

use App\Composite\HTMLComposite;

class Div extends HTMLComposite
{
    public function render(): string
    {
        $output = parent::render();

        return  "<div{$this->attribute}>$output</div>";
    }
}
