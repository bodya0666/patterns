<?php

namespace App\Download;

class SimpleDownload implements Downloader
{
    public function download(string $url): string
    {
        $result = file_get_contents($url);

        return $result;
    }

}