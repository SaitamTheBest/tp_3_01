<?php
namespace S01E03;

use S01E03\I;
use S01E03\I2;

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