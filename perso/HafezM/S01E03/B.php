<?php
namespace S01E03;

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