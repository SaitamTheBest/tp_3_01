<?php

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
        include __DIR__.'/../iut-pw-part1/S01E03/' . $name . '.php'; // Equivaut à include $name . '.php';
    }
});
    
    
