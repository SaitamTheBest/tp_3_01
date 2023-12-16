<?php

// Permet à PHP de trouver nos classes
spl_autoload_register(function($class){
    // On découpe les \
    // On prend le dernier élément (le nom du fichier)
    $name = explode('\\', $class)[2];
    
    include __DIR__.'/../iut-pw-part1/S01E03/' . $name . '.php';
});