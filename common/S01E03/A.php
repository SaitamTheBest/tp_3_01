<?php
namespace PW\Class;

use PW\Interface\I;
use PW\Interface\I2;
use PW\Attribute\R301Attribute;

#[R301Attribute]
class A implements I, I2
{
    static $nameA = 'a';
    public const NAME = 'A';

    public function __toString(): string
    {
        return self::$nameA;
    }

    public function world() : string
    {
        return "World A!";
    }


    public function hello() : string
    {
        return "Hello A ";
    }

    public function getName(){
        echo self::NAME . ' ' . static::$nameA;
    }

    // Premier appel: retourne 0
    // Second appel: retourne 1
    // ...
    // 10ème appel: retourne 9
    public function countTo10(){
        for($i = 0; $i < 10; $i++){
            yield $i;
        }
        // ça fais une erreur
        //return $this;
    }

    public function displayCountTo10(){
        foreach ($this->countTo10() as $i){
            echo $i . ' ';
        }
        echo '<br>';
    }
}