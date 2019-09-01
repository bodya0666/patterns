<?php

namespace App\Component;

use App\Visitor\Visitor;

interface Component
{
    public function accept(Visitor $visitor);
}