<?php
namespace PW\Class;

use PW\Class\A;
use PW\Trait\C;

class B extends A
{
    use C;
    static $nameB = 'b';

    public function __toString(): string
    {
        return self::$nameB;
    }

    public static function helloMethod() : string{
        return "hello";
    }

    public function world(): string
    {
        return "World B!";
    }

    public function hello(): string
    {
        return "Hello B ";
    }

    public function getName(){
        // B va aussi hériter de la constante NAME de la classe A
        echo self::NAME . ' ' . static::$nameB;
    }

}