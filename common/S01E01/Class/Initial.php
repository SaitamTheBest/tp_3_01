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
        //Create a function that takes a string and returns the string with the HTML characters converted to HTML entities.
        echo htmlspecialchars($arg, ENT_QUOTES, 'UTF-8');
    }

    function convert($tab): void
    {
        //Convert an array to a string, with the items separated by commas.
        echo implode($tab);
    }

    function verifyEmail($arg): void
    {
        // Verify if the argument is a valid email.
        $isValidEmail = filter_var($arg, FILTER_VALIDATE_EMAIL);

        if ($isValidEmail !== false) {
            echo "L'email est valide : " . $isValidEmail;
        } else {
            echo "L'email n'est pas valide.";
        }
    }


    function lastCharacter($arg):void
    {
        //Print the last character of a string.
        echo substr($arg, -1);
    }



    function printing(): void
    {
        //Print the file name, the method name and the class name.
        echo __FILE__."<br>";
        echo __METHOD__."<br>";
        echo __CLASS__;
    }

    function reverse($arg1): void
    {
        //Reverse a string
        echo strrev($arg1);
    }

    function mergeStrings(...$args): void
    {
        //Merge strings
        echo implode('', $args);
    }

    function __toString(): string
    {
        //Override toString method.
        return self::class;
    }



    function printClassNameWithFullNamespace(): void
    {
        //Print the class name with full namespace.
        echo __CLASS__;
    }



    function throwException(){
        //Throw an exception.
        throw new \Exception("Exception");
    }

    function reverseAnArrayByIndex($arg): void
    {
        //Reverse an array by index.
        $keys = array_keys($arg);
        krsort($keys);
        echo implode(', ', $keys);
    }

    function mergeTwoArrays($arg1,$arg2): void
    {
        //Merge two arrays : Adding the second array's values to the first array's values.
        $result = array_merge($arg1,$arg2);
        echo implode(', ', $result);
    }

    function printAllCellsWhoAreNotOnTheSecondTable($arg1,$arg2): void
    {
        //print all cells who are not on the second table/
        $result = array_diff($arg1,$arg2);
        echo implode(', ', $result);
    }

    //Maps a function that tries to convert the case of each value of an array reference, if it is a string, with capital letter first, then all lowercase (title case).
    function convertCase($arg): void
    {
        //Converts the case of each value of an array reference, if it is a string, with capital letter first, then all lowercase (title case).
        echo implode(',', array_map('ucwords', $arg));
    }

    function lengthOfVariable($arg): void
    {
        //Verify if the argument is a string or an array, and print the length of the string or the number of elements in the array.
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
$initial->escapeHTML('<em>hello world</em>');
echo "<br>";
$initial->convert(["hello","world"]);
echo "<br>";
$initial->verifyEmail("dqzkudhzd@gmail.com");
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