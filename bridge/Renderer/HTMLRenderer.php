<?php


namespace App\Renderer;


class HTMLRenderer implements RendererInterface
{
    public function renderHeader(): string
    {
        return '<html lang="en"><body>';
    }

    public function renderTitle(string $title): string
    {
        return "<h1>$title</h1>";
    }

    public function renderContent(string $content): string
    {
        return "<p>$content</p>";
    }

    public function renderImage(string $image): string
    {
        return "<img alt='image' src='$image'>";
    }

    public function renderDescription(string $description): string
    {
        return "<p>$description</p>";
    }

    public function renderFooter(): string
    {
        return '</body></html>';
    }

    public function renderParts(array $parts): string
    {
        return $this->renderHeader() . implode("\n", $parts) . $this->renderFooter();
    }
}