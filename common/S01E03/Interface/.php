<?php
interface I {
    public function hello(): string;
}
interface I2 {
    public function world() : string;
}
class A implements I, I2{
    public function hello(): string
    {
        return "Hello A ";
    }
    public function world(): string
    {
        return "World A!";
    }
}

class B extends A {
    public function hello(): string
    {
        return "Hello B ";
    }
    public function world(): string
    {
        return "World B!";
    }
}
//flemme de finir