<?php
namespace S01E03;

class A implements I, I2
{
    public function world() : string
    {
        return "World A!";
    }


    public function hello() : string
    {
        return "Hello A ";
    }
}