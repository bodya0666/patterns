<?php

namespace App\Download;

class ProxyDownload implements Downloader
{
    protected $cache;

    protected $downloader;

    public function __construct(SimpleDownload $download)
    {
        $this->downloader = $download;
    }

    public function download(string $url): string
    {
        if (!isset($this->cache[$url])) {
            $this->cache[$url] = $this->downloader->download($url);
        }

        return $this->cache[$url];
    }
}