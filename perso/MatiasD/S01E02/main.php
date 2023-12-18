<?php
// echo "<br>"; permet de suater une ligne ;)

include('MyClass.php');
include('MyBDDClass.php');

//Loads an object from another included script (and instantiate it), with a:
// création d'un objet de la classe Myclass
$class = new MyClass(21);

// class constant (used)
// affichage d'une constante en passant par l'objet la classe puis en passant directement par la classe sans objet
echo  "constante par appel par l'objet : ";
var_dump($class::constante);
echo "<br>";
echo  "constante par l'appel statique de la classe : ";
var_dump(MyClass::constante);

echo "<br>";
// class variable (used)
// affiche le contenu de l'attribut appelé sur l'objet class
echo  "attribut de l'objet de MyClass : ";
var_dump($class->variable);

echo "<br>";

// inheritance from another class, abstract class
// affichage de la variable de la classe mère (abstract) qui est hérité par MyClass
// comme l'attribut est protected, il faut passer par un getter pour avoir le contenu
echo  "attribut de la classe mère : ";
var_dump($class->getMotherInt());

echo "<br>";

//and implementing an interface
//appel de la fonction implémenté de myinterface, elle affiche les nombres de 1 à 20
echo  "résultat de la fonction de l'interface : ";
$class->afficherNombreDe1A20();

echo "<br>";

//class method that sorts a table like S01E01 with full signature (types, return types, PHPDoc, etc.)
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

//class method that connects to your DB using PDO (use MySQL), creates a table, inserts some data into it, and then reads and returns it
//Se connecter à la base de données
//Remplacer le nom de la base par vos initiales (exemple : WL pour William Lefebvre)
MyBDDClass::connectBDD("localhost", "root", "root", "AB");

//class method that creates a JPEG image representing a red circle and the word "I AM [your initials] & I LOVE PHP" over a blue background and saves it on disk
$class->createImageAndSave("test");
?>
    <br>
    <img src="monImage.jpeg" alt="image" />
    <br>
<?php

//class method that writes the contents of www.google.com into a file
$class->getGoogleContentAndSave(); //save in contenuGoogle.txt

//create a button for the method redirectHTTP
if (isset($_POST['activate_button'])) {
    $class->redirectHTTP("redirect_http.php?name=parametre1");
}

echo "<form id='activationForm' method='post'>
    <button type='submit' name='activate_button'>redirection http</button>
</form>";

//class method that returns the type of an given, untyped parameter
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


//class method that returns an array containing the name of the current host, server and client IP, and request method
//Permet de récupérer les infos du serveur
$infos = $class->getRequestInfo();

echo "<br>";

// Affichage des informations
echo "Nom de l'hôte : " . $infos['host'] . "<br>";
echo "Adresse IP du serveur : " . $infos['server_ip'] . "<br>"; //n'affiche rien car on est en local
echo "Adresse IP du client : " . $infos['client_ip'] . "<br>";
echo "Méthode de la requête : " . $infos['request_method'] . "<br>";

echo "<br>";

//class method that returns the currently consumed RAM and the maximum RAM your script can use (PHP maximum, not the current one)
//test fonction d'affichage de la ram utilisé et total utilisable
$class->fnRam();

//class method that uses a switch() construct then a match() construct to tell if an input letter parameter is a vowel or consonant
//test fonction qui donne la nature d'un caractère (voyelle ou consonne)
$class->switchEtmatchPourUnCaract('a');
$class->switchEtmatchPourUnCaract('c');

echo "<br>";


//class method that uses a while() construct that is interrupted by a break keyword once it reaches a certain input integer number parameter after outputting all the looped numbers before
//test boucle while avec fin en break
echo "<br>";
echo "fin à 12 : ";
$class->whilePlusBreak(12);
echo "<br>";
echo "fin à 25 : ";
$class->whilePlusBreak(25);

echo "<br>";

//class method that uses a do() construct that uses a continue keyword to print the numeric values of a given array that are odd
//test fonction qui affiche les nombres impairs d'un tableau
$tab = [1,2,3,4,5,6,7,8,9,10,20,25];
$class->fonctionDoetContinue($tab);