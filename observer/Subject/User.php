<?php

namespace App\Subject;

use SplObserver;

class User implements \SplSubject
{
    /**
     * @var array;
     */
    private $userPosts = [];

    /**
     * @var \SplObjectStorage
     */
    private $observer;

    public function __construct()
    {
        $this->observer = new \SplObjectStorage();
    }

    public function attach(SplObserver $observer)
    {
        $this->observer->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $this->observer->detach($observer);
    }

    public function notify()
    {
        foreach ($this->observer as $key=>$obj)
        {
            $obj->update($this);
        }
    }

    public function newPost($data): void
    {
        $this->userPosts[] = $data;
        $this->notify();
    }

    /**
     * @return array
     */
    public function getUserPosts(): array
    {
        return $this->userPosts;
    }
}