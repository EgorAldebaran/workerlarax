<?php

namespace Tests;

class Counter
{
    public static $count = 0;

    public static function increment()
    {
        self::$count++;
    }

    public static function getCount()
    {
        return self::$count;
    }
}
