<?php

namespace App\Page;

use App\Renderer\RendererInterface;

abstract class Page
{
    protected $renderer;

    public function __construct(RendererInterface $renderer)
    {
        $this->renderer = $renderer;
    }

    public function changeRenderer(RendererInterface $renderer): void
    {
        $this->renderer = $renderer;
    }

    abstract public function view(): string;
}
