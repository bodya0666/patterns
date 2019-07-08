<?php

namespace App\Page;

use App\Renderer\RendererInterface;

class SimplePage extends Page
{
    protected $title;
    protected $content;
    public function __construct(RendererInterface $renderer, string $title, string $content)
    {
        parent::__construct($renderer);

        $this->title = $title;
        $this->content = $content;
    }

    public function view(): string
    {
        $this->renderer->renderParts([
            $this->renderer->renderHeader(),
            $this->renderer->renderTitle($this->title),
            $this->renderer->renderContent($this->content),
            $this->renderer->renderFooter()
        ]);
    }
}
