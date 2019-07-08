<?php

namespace App\Page;

use App\Renderer\RendererInterface;

class AdvancedPage extends Page
{
    protected $title;

    protected $content;

    protected $image;

    protected $description;

    public function __construct(RendererInterface $renderer, $title, $content, $image, $description)
    {
        parent::__construct($renderer);

        $this->renderer = $renderer;
        $this->title = $title;
        $this->content = $content;
        $this->image = $image;
        $this->description = $description;
    }

    public function view(): string
    {
        return $this->renderer->renderParts([
            $this->renderer->renderTitle($this->title),
            $this->renderer->renderContent($this->content),
            $this->renderer->renderImage($this->image),
            $this->renderer->renderDescription($this->description),
        ]);
    }
}
