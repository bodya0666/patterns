<?php


namespace App\Renderer;


class jSONRenderer implements RendererInterface
{
    public function renderHeader(): string
    {
        return "{\n";
    }

    public function renderTitle(string $title): string
    {
        return "\"title\": \"$title\"";
    }

    public function renderContent(string $content): string
    {
        return "\"content\": \"$content\"";
    }

    public function renderImage(string $image): string
    {
        return "\"image\": \"$image\"";
    }

    public function renderDescription(string $description): string
    {
        return "\"description\": \"$description\"";
    }

    public function renderFooter(): string
    {
        return "\n}";
    }

    public function renderParts(array $parts): string
    {
        return $this->renderHeader() . implode(",\n", $parts) . $this->renderFooter();
    }
}