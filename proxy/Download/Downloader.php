<?php

namespace App\Download;

interface Downloader
{
    public function download(string $url): string;
}