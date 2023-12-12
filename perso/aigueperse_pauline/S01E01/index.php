<?php
// operateur =
$x = 10;
// operateur ==
$a = 5;
$b = 10;
$result = ($a == $b); // false
// operateur ===
$a = 5;
$b = "5";
$result = ($a === $b); // false
// operateur ++
$x = 5;
$x++; // $x est maintenant 6
// operateur <=>
$result = 5 <=> 10; // -1
// operateurs "ou" et "et"
$result = true || false; // true
$result = true && false; // false
// operateurs "&" et "|"
$result = 5 & 3; // 1 (binary 101 & 011 = 001)
$result = 5 | 3; // 7 (binary 101 | 011 = 111)
// operateur ??
$x = null;
$result = $x ?? "default"; // "default"
// operateur >=
$age = 18;
$message = ($age >= 18) ? "Adult" : "Minor";
// operateur ??=
$x = null;
$x ??= 5; // $x est maintenant 5
// for each
$colors = array("red", "green", "blue");
foreach ($colors as $color) {
    echo $color . " ";
}
// for
for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";
}
// if, elseif
$x = 10;
if ($x > 0) {
    echo "Positive";
} elseif ($x < 0) {
    echo "Negative";
} else {
    echo "Zero";
}
// while
$count = 0;
while ($count < 3) {
    echo $count . " ";
    $count++;
}
// do-while
$count = 0;
do {
    echo $count . " ";
    $count++;
} while ($count < 3);
// Ternary Operator (a?b:c)
$age = 18;
$message = ($age >= 18) ? "Adult" : "Minor";

class PAClass
{
    // Outputs a given string in capital letters, working with special characters.
    public function capitalizeString($input)
    {
        return mb_strtoupper($input);
    }

    // Escapes a given HTML string into their safe character equivalents.
    public function escapeHtml($htmlString)
    {
        return htmlspecialchars($htmlString, ENT_QUOTES, 'UTF-8');
    }

    // Converts a given array to a string, all values being separated by ", ".
    public function arrayToString($array)
    {
        return implode(", ", $array);
    }

    // Verifies that a given string is a correct email.
    public function isValidEmail($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
    }

    // Returns the last character of a string parameter.
    public function getLastCharacter($string)
    {
        return mb_substr($string, -1);
    }

    // Merges two arrays given as parameters.
    public function mergeArrays($array1, $array2)
    {
        return array_merge($array1, $array2);
    }

    // Returns an array containing the current file name, class name, and method name.
    public function getClassInfo()
    {
        return [
            'fileName' => __FILE__,
            'className' => __CLASS__,
            'methodName' => __METHOD__
        ];
    }

    // Returns a reversed string using an anonymous arrow function.
    public function reverseString($string)
    {
        $reverse = fn($str) => strrev($str);
        return $reverse($string);
    }

    // Returns the current class name used as a string when an instance of the current class is used as a string (if it is Stringable).
    public function __toString()
    {
        return __CLASS__;
    }

    // Merges an unknown number of string parameters into one merged string.
    public function mergeStrings(...$strings)
    {
        return implode("", $strings);
    }

    // Returns if a given variable is empty using a ternary condition.
    public function isEmpty($variable)
    {
        return empty($variable) ? 'Empty' : 'Not Empty';
    }

    // Prints the current class name (with its full namespace) and then only its name using ::class.
    public function printClassName()
    {
        echo __CLASS__ . "\n";
        echo self::class . "\n";
    }

    // Throws an exception.
    public function throwException()
    {
        throw new \Exception('This is an exception!');
    }

    // Returns an array of all the keys of a given array, sorted reverse (higher to lower).
    public function reverseSortedKeys($array)
    {
        $keys = array_keys($array);
        rsort($keys);
        return $keys;
    }

    // Takes two arrays as parameters, returns all cells from the first one that are not included in the second one.
    public function arrayDiff($array1, $array2)
    {
        return array_diff($array1, $array2);
    }

    // Maps a function that tries to convert the case of each value of an array reference, if it is a string, with capital letter first, then all lowercase (title case).
    public function titleCaseArray(&$array)
    {
        $array = array_map(function ($value) {
            return is_string($value) ? ucfirst(strtolower($value)) : $value;
        }, $array);
    }

    // Returns the length of a variable, array, or string, or the return of a Countable class it if implements it.
    public function getLength($variable)
    {
        if (is_countable($variable)) {
            return count($variable);
        } else {
            return strlen((string)$variable);
        }
    }
}

// Example Usage:
$paObject = new PAClass();
echo $paObject->capitalizeString("èçì…") . "\n";
echo $paObject->escapeHtml("<p>Safe HTML</p>") . "\n";
echo $paObject->arrayToString(['one', 'two', 'three']) . "\n";
echo $paObject->isValidEmail('test@example.com') ? 'Valid' : 'Invalid';
echo "\n";
echo $paObject->getLastCharacter('Hello') . "\n";
print_r($paObject->mergeArrays([1, 2], ['a', 'b'])) . "\n";
print_r($paObject->getClassInfo()) . "\n";
echo $paObject->reverseString("èçì…") . "\n";
echo $paObject . "\n";
echo $paObject->mergeStrings('A', 'B', 'C') . "\n";
echo $paObject->isEmpty([]) . "\n";
$paObject->printClassName();
try {
    $paObject->throwException();
} catch (\Exception $e) {
    echo $e->getMessage() . "\n";
}
print_r($paObject->reverseSortedKeys(['b' => 2, 'a' => 1])) . "\n";
print_r($paObject->arrayDiff([1, 2, 3], [2, 3, 4])) . "\n";
$arrayToTitleCase = ['foo', 'BAR', 'Baz'];
$paObject->titleCaseArray($arrayToTitleCase);
print_r($arrayToTitleCase) . "\n";
echo $paObject->getLength('Hello') . "\n";
?>