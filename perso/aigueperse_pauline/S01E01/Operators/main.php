<?php
echo "<br>";

$a = 1;
echo "a =" . $a;

$testEgalite = $a == 1;
echo "<br>" . " 1 == 1" . "$testEgalite";

$testEgaliteType = 1 === 1;
echo "<br>" . "1 === 1 " . "$testEgaliteType";

$a++;
echo "<br>" . "a++ : $a";

$a--;
echo "<br>" . "a-- : $a";

echo "<br>";
echo "1<=>1, 1<=>2, 2<=>1";
echo "<br>";
echo  1 <=> 1; // 0
echo "<br>";
echo  1 <=> 2; // -1
echo "<br>";
echo 2 <=> 1; // 1
echo "<br>";

$b = 2;

// Si la vleur est null ou inconnu alors il retourne par défaut null
echo "opérateur ??";
echo "<br> avec un null puis une valeur : ";
echo null??$b;
echo "<br> avec une valeur puis un null : ";
echo $b??null;
echo "<br>";

$age = 17;
echo "age = 17 et condition pour true c'est d'avoir 18 and ou plus : ";
echo ($age > 17) ? "majeur" : "mineur";
echo "<br>";
$age = 19;
echo " age : 19 ";
echo ($age > 17) ? "majeur" : "mineur";