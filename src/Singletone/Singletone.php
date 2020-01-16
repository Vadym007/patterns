<?php
declare(strict_types=1);

namespace Src\Singletone;

class Singletone
{
    private static $instance = null;

    public static function getInstance()
    {
        return static::instance ?? (static::instance = new static());
    }

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}