<?php
use PW\Class\A;
use PW\Class\B;


// Permet à PHP de trouver nos classes
spl_autoload_register(function($missingNamespace){
    // On découpe les \
    // On prend le dernier élément (le nom du fichier)

    // Le patterne: PW\AB\CD\EF\...\MonFichier
    $regex = "/PW\\\(\w+\\\)+\w+/";

    // Si le namespace correspond au patterne...
    if(preg_match($regex, $missingNamespace)){
        // Patterne qui prend tout avant le nom du fichier ex:
        // pour PW\Class\A ce patterne match sur PW\Class\ uniquement
        $namespaceParent = "/PW\\\(\w+\\\)*\w+\\\/";

        // On remplace ce qu'il y a avant le nom du fichier pour isoler ce dernier
        // On part du principe que les fichiers à trouver sont dans le répertoire courant de ce script
        $name = preg_replace($namespaceParent, "", $missingNamespace);

        // Différence '' et "" : "" permet d'évaluer les expressions qu'on a à l'intérieur
        include "$name.php"; // Equivaut à include $name . '.php';
    }
});

// Arrow function
// Permet d'avoir des fonctions en tant que variables (fonctions lambdas)
$hello = fn(string $inputString) => 'Hello ' . $inputString;

$a = new A();
$b = new B();

echo $a->hello() . ' ' . $a->world();
echo '<br>';
$a->getName();
echo '<br>';
$a->displayCountTo10();
echo '<br>';

echo $b->hello() . ' ' . $b->world();
echo '<br>';
$b->getName();
echo '<br>';

// On appelle la méthode helloMethod de la classe B
$methodName = 'helloMethod';
echo $b->$methodName();
echo '<br>';

echo '<br> Arrow function: ' . $hello("Mr Krabs");
echo '<br>';

echo 'A.php and B.php can be outputed';
echo '<br>';
echo $a;
echo '<br>';
echo $b;

// On créee une classe anonyme qui hérite de A
$anon = new class() extends A{};
echo '<br>';
echo $anon->hello() . ' ' . $anon->world();