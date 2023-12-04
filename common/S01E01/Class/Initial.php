<?php

namespace Initial\S01E01;

use Stringable;

class Initial implements Stringable
{
    function capitalLetter($arg)
    {
        echo strtoupper($arg);
    }
    
    function escapeHTML($arg){
        echo htmlspecialchars($arg, ENT_QUOTES, 'UTF-8');
    }

    function convert($tab){
        echo implode($tab);
    }

    function verifyEmail($arg)
    {
        echo "L'email est valide : ".filter_var($arg, FILTER_VALIDATE_EMAIL);
    }

    function deleteLastCharacter($arg){
        echo $arg;
        array_slice($arg, end($arg));
        echo $arg;
    }

    function mergeArray($arg1,$arg2){
        echo array_merge($arg1,$arg2);
    }


    function printing(){
        echo __FILE__;
        echo __METHOD__;
        echo __CLASS__;
    }

    function reverse($arg1){
        echo strrev($arg1);
    }

    function __toString(): string
    {
        return self::class;
    }

    function lengthOfVariable($arg){
        if (is_string($arg)){
            return strlen($arg);
        } else if (is_array($arg) || $arg instanceof Countable){
            return count($arg);
        }
    }
}