<?php

namespace App\Composite;

abstract class HTMLComposite extends HTMLElement
{
    protected $tags;

    public function add(HTMLElement $element): void
    {
        $this->tags[$element->getName()] = $element;
    }

    public function remove(string $name): void
    {
        unset($this->tags[$name]);
    }

    public function setAttribute($attribute): void
    {
        foreach ($this->tags as $name => $tag)
        {
            if (isset($attribute[$name])) {
                $tag->setAttribute($attribute[$name]);
            } else {
                if (isset($attribute[$name][$name]))
                {
                    $tag->setCompositeAttribute($attribute[$name][$name]);
                }
            }
        }
    }

    public function setCompositeAttribute($attribute)
    {
        parent::setAttribute($attribute);
    }

    public function getAttribute()
    {
        $attribute = [];

        foreach ($this->tags as $name => $tag)
        {
            $attribute[$name] = $tag->getAttribute();
        }

        return $attribute;
    }

    public function render(): string
    {
        $output = '';

        foreach ($this->tags as $name => $tag)
        {
            $output .= $tag->render();
        }

        return $output;
    }
}