<?php

namespace App\Observer;

use App\Subject\User;
use SplSubject;

class Post implements \SplObserver
{
    /**
     * @var $postCount int
     */
    private $postCount = 0;

    public function update(SplSubject $subject): void
    {
        if ($subject instanceof User) {
            $this->postCount++;
        }
    }

    public function getPostCount(): int
    {
        return $this->postCount;
    }
}