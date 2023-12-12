<?php

namespace PW\Class;

class Toto{
    public $nom;
    public $prenom;
    // les méthodes '__méthode(...)' sont des méthodes spéciales
    // __construct(...) permet de créer un constructeur
    public function __construct(string $nom, string $prenom){
        $this->nom = $nom;
        $this->prenom = $prenom;
    }
}