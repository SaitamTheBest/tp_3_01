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

//test fonction qui affiche les nombres pair d'un tableau
$tabPair = [1,2,3,4,5,6,7,8,9,10,20,25];
$class->fonctionDoetContinue($tabPair);

//test fonction d'affichae de la ram utilisé et total utilisable
$class->fnRam();


//Se connecter à la base de données
//Remplacer le nom de la base par vos initiales (exemple : WL pour William Lefebvre)
MyBDDClass::connectBDD("localhost", "root", "root", "AB");

//Permet de récupérer les infos du serveur
$infos = $class->getRequestInfo();

echo "<br>";

// Affichage des informations
echo "Nom de l'hôte : " . $infos['host'] . "<br>";
echo "Adresse IP du serveur : " . $infos['server_ip'] . "<br>"; //n'affiche rien car on est en local
echo "Adresse IP du client : " . $infos['client_ip'] . "<br>";
echo "Méthode de la requête : " . $infos['request_method'] . "<br>";

$class->createImageAndSave("test");
?>
    <br>
    <img src="monImage.jpeg" alt="image" />
    <br>
<?php


$class->getGoogleContentAndSave(); //save in contenuGoogle.txt

echo "<br>";
echo $class->HTTP_GET_value("name");

echo "<br>";

//create a button for the method redirectHTTP
if (isset($_POST['activate_button'])) {
    $class->redirectHTTP("redirect_http.php");
}

echo "<form id='activationForm' method='post'>
    <button type='submit' name='activate_button'>redirection http</button>
</form>";