<?php
namespace PW\Trait;
use PW\Class\A;

trait C{
    static $nameC = 'c';

    public function __toString(): string
    {
        return self::$nameC;
    }

    public function hello() : string{
        return "Hello C ";
    }

    public function world() : string{
        return "World C!";
    }

    public function getName(){
        echo self::NAME . ' ' . static::$nameC;
    }
}