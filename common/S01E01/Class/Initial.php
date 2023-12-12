<?php

namespace Initial\S01E01;

use Countable;
use Stringable;

class Initial implements Stringable
{
    function capitalLetter($arg): void
    {
        //Create a function that takes a string and returns the string in uppercase.
        echo strtoupper($arg);
    }

    function escapeHTML($arg): void
    {
        echo htmlspecialchars($arg, ENT_QUOTES, 'UTF-8');
    }

    function convert($tab): void
    {
        echo implode($tab);
    }

    function verifyEmail($arg): void
    {
        echo "L'email est valide : ".filter_var($arg, FILTER_VALIDATE_EMAIL);
    }

    function lastCharacter($arg):void
    {
        echo substr($arg, -1);
    }

    function mergeArray($arg1,$arg2){
        echo array_merge($arg1,$arg2);
    }


    function printing(){
        echo __FILE__."<br>";
        echo __METHOD__."<br>";
        echo __CLASS__;
    }

    function reverse($arg1){
        echo strrev($arg1);
    }

    function mergeStrings(...$args) {
        echo implode('', $args);
    }

    function __toString(): string
    {
        return self::class;
    }



    function printClassNameWithFullNamespace(){
        echo __CLASS__;
    }



    function throwException(){
        throw new \Exception("Exception");
    }

    function reverseAnArrayByIndex($arg){
        $keys = array_keys($arg);
        krsort($keys);
        echo implode(', ', $keys);
    }

    function mergeTwoArrays($arg1,$arg2){
        $result = array_merge($arg1,$arg2);
        echo implode(', ', $result);
    }

    function printAllCellsWhoAreNotOnTheSecondTable($arg1,$arg2){
        $result = array_diff($arg1,$arg2);
        echo implode(', ', $result);
    }

    //Maps a function that tries to convert the case of each value of an array reference, if it is a string, with capital letter first, then all lowercase (title case).
    function convertCase($arg){
        echo implode(',', array_map('ucwords', $arg));
    }

    function lengthOfVariable($arg): void
    {
        if (is_string($arg)){
            echo strlen($arg);
        } else if (is_array($arg) || $arg instanceof Countable){
            echo count($arg);
        }
    }
}
$myArray = array(
    'hello',
    'world',
);
$myArray2 = array(
    'goodbye',
    'my',
    'lover',
);
$myArray3 = array(
    'hello' => 1,
    'world' => 0,
);
$initial = new Initial();
$initial->capitalLetter("hello world");
echo "<br>";
$initial->escapeHTML("<p>hello world</p>");
echo "<br>";
$initial->convert(["hello","world"]);
echo "<br>";
$initial->verifyEmail("dqzkudhzd");
echo "<br>";
$initial->lastCharacter("hello world");
echo "<br>";
$initial->printing();
echo "<br>";
$initial->reverse("hello world");
echo "<br>";
$initial->mergeStrings("hello","world","fleqhfoihoidzqodihqzodih");
echo "<br>";
$initial->printClassNameWithFullNamespace();
echo "<br>";
$initial->reverseAnArrayByIndex($myArray3);
echo "<br>";
//$initial->throwException();
$initial->mergeTwoArrays($myArray, $myArray2);
echo "<br>";
$initial->printAllCellsWhoAreNotOnTheSecondTable($myArray, $myArray2);
echo "<br>";
$initial->convertCase($myArray);
echo "<br>";
$initial->lengthOfVariable("helLO world");
echo "<br>";