<?php
// echo "<br>"; permet de suater une ligne ;)

include('MyClass.php');
include('MyBDDClass.php');

// création d'un objet de la classe Myclass
$class = new MyClass(21);

// affichage d'une constante en passant par l'objet la classe puis en passant directement par la classe sans objet
echo  "constante par appel par l'objet : ";
var_dump($class::constante);

echo "<br>";

echo  "constante par l'appel statique de la classe : ";
var_dump(MyClass::constante);

echo "<br>";

// affiche le contenu de l'attribut appelé sur l'objet class
echo  "attribut de l'objet de MyClass : ";
var_dump($class->variable);

echo "<br>";

//affichage de la variable de la classe mère (abstract) qui est hérité par MyCLass
//comme l'attribut est protected il faut passer par une fonction getter pour avoir le contenu
echo  "attribut de la classe mère : ";
var_dump($class->getMotherInt());

echo "<br>";

//appel de la fonction implémenter de myinterface, elle affiche les nombres de 1 à 20
    echo  "résultat de la fonction de l'interface : ";
$class->afficherNombreDe1A20();

echo "<br>";


$exempleArray = [10,9,8,11,12,13,7,6,5,4,3,2,1];
//affichage tableau non trié
var_dump($exempleArray);

 //tri la liste dans l'ordre croissant
$exempleArray = $class->sortList($exempleArray);
echo "<br>";

//affichage du tableau trié :
echo "résultat sortList sur une liste décroissante : ";
echo "<br>";
var_dump($exempleArray);

echo "<br>";

//test appelle de la fonction qui renvoie le type d'un paramètre qui n'est pas typé
echo "<br>";
echo "type d'un paramètre non typé  : ";
echo "<br>";
echo "param est un entier :   ";
echo $class->renvoiTypeDunParamNonTyper(12);
echo "<br>";
echo "param est un string :   ";
echo $class->renvoiTypeDunParamNonTyper("50");
echo "<br>";
echo "param est un double :   ";
echo $class->renvoiTypeDunParamNonTyper(12.2);


//test fonction qui donne la nature d'un caractère (voyelle ou consonne)
$class->switchEtmatchPourUnCaract('a');
$class->switchEtmatchPourUnCaract('c');

//test boucle while vec fin en break
echo "<br>";
echo "fin à 12 : ";
$class->whilePlusBreak(12);
echo "<br>";
echo "fin à 25 : ";
$class->whilePlusBreak(25);


//MyBDDClass
MyBDDClass::connectBDD("localhost", "root", "root", "WL");

$class->createImageAndSave("test");


$class->getGoogleContentAndSave();

?>


