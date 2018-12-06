<?php

class App
{
    protected static $registry = [];

    public static function bind($key, $value)
    {
        self::$registry[$key] = $value;
    }

    public static function get($key)
    {
        if (! isset (self::$registry[$key])) {
            throw new Exception("This registry dont have $key");
        }
        return self::$registry[$key];
    }

}