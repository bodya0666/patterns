<?php

namespace App\Composite;

abstract class HTMLElement
{
    protected $content;
    protected $attribute;
    protected $name;

    public function __construct($name, $content)
    {
        $this->content = $content;
        $this->name = $name;
    }

    public function setAttribute($attribute): void
    {
        $this->attribute = ' ' . $attribute;
    }

    public function getAttribute()
    {
        return $this->attribute;
    }

    public function getName()
    {
        return $this->name;
    }

    abstract public function render(): string;
}