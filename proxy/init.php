<?php

namespace App;

use App\Download\ProxyDownload;
use App\Download\SimpleDownload;

$simpleDownloader = new SimpleDownload();

$downloader = new ProxyDownload($simpleDownloader);

$downloader->download('https://example.com/');

$downloader->download('https://example.com/');
