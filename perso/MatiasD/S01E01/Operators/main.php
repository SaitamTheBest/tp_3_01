<?php
echo "<br>";

//Definir une variable
$a = 1;
echo "a =" . $a;

//Verfie une égalité de valeur (renvoie un booleen)
$testEgalite = $a == 1;
echo "<br>" . " 1 == 1" . "$testEgalite";

//Verfie une égalité de type(renvoie un booleen)
$testEgaliteType = 1 === 1;
echo "<br>" . "1 === 1 " . "$testEgaliteType";

//Incrémentation de +1
$a++;
echo "<br>" . "a++ : $a";

//Décrémentation de -1
$a--;
echo "<br>" . "a-- : $a";

echo "<br>";
echo "1<=>1, 1<=>2, 2<=>1";
//Retourne 0 quand les deux valeurs sont égales
echo "<br>";
echo  1 <=> 1; // 0
echo "<br>";
//Retourne -1 quand la deuxième valeur entré est plus grande que la première
echo  1 <=> 2; // -1
echo "<br>";
//Retourne 1 quand la première valeur entré est plus grande que la deuxième
echo 2 <=> 1; // 1
echo "<br>";

echo "opérateur ??";
$val = "inconnue";
//Permet de renvoyer la valeur $val si l'expression donnée est null ou si la variable n'existe pas
echo "<br> avec un null puis une valeur : ";
echo null??$val;
echo "<br> avec une valeur puis une variable inconnue : ";
echo $unknown = $val??$unknown;
echo "<br>";

$age = 17;
echo "age = 17 et condition pour true c'est d'avoir 18 and ou plus : ";
//réalise un if : si age>17 alors "majeur, sinon mineur"
echo ($age > 17) ? "majeur" : "mineur";
echo "<br>";
$age = 19;
echo " age : 19 ";
echo ($age > 17) ? "majeur" : "mineur";