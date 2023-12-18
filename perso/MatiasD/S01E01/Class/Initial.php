<?php

namespace Initial\S01E01;

use Countable;
use Stringable;

class Initial implements Stringable
{
    function capitalLetter($arg): void
    {
        //Créer une fonction qui prend une chaîne et renvoie la chaîne en majuscule
        echo strtoupper($arg);
    }

    function escapeHTML($arg): void
    {
        //Créer une fonction qui prend une chaîne et renvoie la chaîne avec les caractères HTML convertis en entités HTML
        echo htmlspecialchars($arg, ENT_QUOTES, 'UTF-8');
    }

    function convert($tab): void
    {
        //Convertit un tableau en chaîne, avec les éléments séparés par des virgules
        echo implode($tab);
    }

    function verifyEmail($arg): void
    {
        // Vérifie si l'argument est un e-mail valide
        $isValidEmail = filter_var($arg, FILTER_VALIDATE_EMAIL);

        if ($isValidEmail !== false) {
            echo "L'email est valide : " . $isValidEmail;
        } else {
            echo "L'email n'est pas valide.";
        }
    }

    function lastCharacter($arg):void
    {
        //Imprime le dernier caractère d'une chaîne
        echo substr($arg, -1);
    }

    function printing(): void
    {
        //Imprime le nom du fichier, le nom de la méthode et le nom de la classe
        echo __FILE__."<br>";
        echo __METHOD__."<br>";
        echo __CLASS__;
    }

    function reverse($arg1): void
    {
        //Inverser une chaîne
        echo strrev($arg1);
    }

    function mergeStrings(...$args): void
    {
        //Fusionner les chaines de caractères
        echo implode('', $args);
    }

    function __toString(): string
    {
        //Remplacez la méthode toString.
        return self::class;
    }

    function printClassNameWithFullNamespace(): void
    {
        //Imprimer le nom de la classe avec l'espace de noms complet
        echo __CLASS__;
    }

    function throwException(){
        //Lancer une exception.
        throw new \Exception("Exception");
    }

    function reverseAnArrayByIndex($arg): void
    {
        //Inversez un tableau par index.
        $keys = array_keys($arg);
        krsort($keys);
        echo implode(', ', $keys);
    }

    function mergeTwoArrays($arg1,$arg2): void
    {
        //Fusionner deux tableaux : Ajout des valeurs du deuxième tableau aux valeurs du premier tableau
        $result = array_merge($arg1,$arg2);
        echo implode(', ', $result);
    }

    function printAllCellsWhoAreNotOnTheSecondTable($arg1,$arg2): void
    {
        //Imprimer toutes les cellules qui ne sont pas sur le deuxième tableau
        $result = array_diff($arg1,$arg2);
        echo implode(', ', $result);
    }

    //Mappe une fonction qui tente de convertir la casse de chaque valeur d'une référence de tableau,
    // s'il s'agit d'une chaîne, avec d'abord la lettre majuscule, puis toutes les minuscules (cas du titre)
    function convertCase($arg): void
    {
        //Convertit la casse de chaque valeur d'une référence de tableau,
        // s'il s'agit d'une chaîne, avec d'abord la lettre majuscule, puis toutes les minuscules (cas du titre).
        echo implode(',', array_map('ucwords', $arg));
    }

    function lengthOfVariable($arg): void
    {
        //Vérifier si l'argument est une chaîne ou un tableau et
        // imprimer la longueur de la chaîne ou le nombre d'éléments dans le tableau.
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