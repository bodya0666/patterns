<?php

namespace App\Renderer;

interface RendererInterface
{
    public function renderHeader(): string;

    public function renderTitle(string $title): string;

    public function renderContent(string $content): string;

    public function renderImage(string $image): string;

    public function renderDescription(string $description): string;

    public function renderFooter(): string;

    public function renderParts(array $parts): string;
}
