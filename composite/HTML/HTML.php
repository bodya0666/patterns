<?php

namespace App\HTML;

use App\Composite\HTMLComposite;

class HTML extends HTMLComposite
{
    public function render(): string
    {
        $output = parent::render();
        return
        "
        <!doctype html>
        <html lang=\"en\">
        <head>
            <meta charset=\"UTF-8\">
            <meta name=\"viewport\"
                  content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
            <title>{$this->content}</title>
        </head>
        <body>
        $output
        </body>
        </html>
        ";
    }
}
