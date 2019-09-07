<?php

namespace App;

use App\Expression\Minus;
use App\Expression\Number;
use App\Expression\Plus;

class Context
{
    /**
     * @param $context
     * @param bool $recursiveCall
     * @return Minus|Number|Plus
     * @throws \Exception
     */
    public function evaluate($context, $recursiveCall = false)
    {
        $context = preg_replace('/[^0-9+-]/', '', $context);
        if (is_numeric($context))
        {
            return new Number($context);
        }
        $length = strlen($context);
        $pos = $length - 1;
        while ($pos > 0)
        {
            if (is_numeric($context{$pos})) {
                $pos--;
            } else {
                if (!is_numeric(substr($context, 0, $pos)) && $recursiveCall && preg_match('~[0-9]~', $context)) {
                    return $this->evaluate(substr($context, 0, $pos), true);
                }
                $left = $this->evaluate(substr($context, 0, $pos), true);

                $right = new Number(substr($context, $pos+1, $length));
                switch ($context{$pos})
                {
                    case '+':
                        return new Plus($left, $right);
                        break;
                    case '-':
                        return new Minus($left, $right);
                        break;
                }
            }
        }
        throw new \Exception('No number to calculate');
    }
}
