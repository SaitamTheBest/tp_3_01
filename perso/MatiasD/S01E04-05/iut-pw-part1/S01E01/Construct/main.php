<?php
$array = array_fill(0, 15, 0);
$array = array_map(/**
 * @throws Exception
 */ function ($value) {
    return random_int(1, 3);
}, $array);

echo "<h1>"."ForEach"."</h1>";
foreach ($array as $element){
    if ($element == 1){
         echo "L'élément est égale à 1"."<br>";
    } else if ($element == 2){
        echo "L'élement est égal à 2"."<br>";
    } else{
        echo "L'élement est égal 3"."<br>";
    }
}

echo "<br>"."<h1>"."For"."</h1>";

for ($iter = 0; $iter < sizeof($array); $iter++){
    if ($array[$iter] == 1){
        echo "L'élément est égale à 1"."<br>";
    } else if ($array[$iter] == 2){
        echo "L'élement est égal à 2"."<br>";
    } else{
        echo "L'élement est égal 3"."<br>";
    }
}

echo "<br>"."<h1>"."While"."</h1>";
$iterator = 0;
while ($iterator < sizeof($array)){
    if ($array[$iterator] == 1){
        echo "L'élément est égale à 1"."<br>";
    } else if ($array[$iterator] == 2){
        echo "L'élement est égal à 2"."<br>";
    } else{
        echo "L'élement est égal à 3"."<br>";
    }
    $iterator++;
}

echo "<br>"."<h1>"."Do While"."</h1>";
$iterator=0;
do {
    if ($array[$iterator] == 1) {
        echo "L'élément est égale à 1" . "<br>";
    } else if ($array[$iterator] == 2) {
        echo "L'élement est égal à 2" . "<br>";
    } else {
        echo "L'élement est égal à 3" . "<br>";
    }
    $iterator++;
} while ($iterator < sizeof($array));


$a = 155;
$resultat = ($a > 18) ? "majeur" : "mineur";
