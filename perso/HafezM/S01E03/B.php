<?php
namespace S01E03;

use S01E03\A;
class B extends A
{
    use C;
    public function world(): string
    {
        return "World B!";
    }

    public function hello(): string
    {
        return "Hello B ";
    }

}