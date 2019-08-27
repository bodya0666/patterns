<?php

namespace App;

use App\Observer\Post;
use App\Subject\User;

include __DIR__ . '/vendor/autoload.php';

$user = new User();

$posts = new Post();

$user->attach($posts);

$user->newPost('New post...');

var_dump($posts->getPostCount());

$user->detach($posts);
$user->notify();

var_dump($posts->getPostCount());

