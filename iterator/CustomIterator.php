<?php

namespace App;

class CustomIterator implements \Iterator
{
    private $position = 0;

    private $reverse = false;

    private $reversed = false;

    private $items = [];

    public function __construct($reverse = false)
    {
        $this->reverse = $reverse;
    }

    public function current()
    {
        return $this->items[$this->position];
    }

    public function next()
    {
        $this->position = $this->position + ($this->reverse ? -1 : 1);

        $rewind = $this->reverse ? -1 : count($this->getItems());

        if($this->position == $rewind && !$this->reversed) {
            $this->position = $this->reverse ? 1 : count($this->getItems()) - 2;
            $this->reversed = true;
            $this->reverse = $this->reverse ? false : true;
        }
    }

    public function key()
    {
        return $this->position;
    }

    public function valid()
    {
        return isset($this->items[$this->position]);
    }

    public function rewind()
    {
        $this->position = $this->reverse ? count($this->getItems()) - 1 : 0;
    }

    public function getItems(): array
    {
        return $this->items;
    }

    public function setItems(string $item): void
    {
        $this->items[] = $item;
    }

}