<?php

namespace App;

class Singleton
{
    protected static $instances = [];

    private function __construct() {}

    private function __clone() {}

    public function __wakeup()
    {
        throw new \Exception('You can\'t instance this class');
    }

    public static function getInstance()
    {
        $subclass = static::class;

        if (!isset(self::$instances[$subclass])) {
            self::$instances[$subclass] = new static();
        }

        return self::$instances[$subclass];
    }
}