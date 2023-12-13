<?php
use PW\Class\A;
use PW\Class\B;


// Permet à PHP de trouver nos classes
spl_autoload_register(function($class){
    // On découpe les \
    // On prend le dernier élément (le nom du fichier)
    $name = explode('\\', $class)[2];

    include $name . '.php';
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

$anon = new class() extends A{};
echo '<br>';
echo $anon->hello() . ' ' . $anon->world();