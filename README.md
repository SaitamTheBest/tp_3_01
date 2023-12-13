# tp_3_01
## Lancer le TP
<u>Pour lancer le serveur PHP</u>

Il faut aller dans le répertoire racine de nos fichier de code avec le cmd\
commande cd possible 

on va d'abord dans le bon disque de stockage :
- `cd e:\`
ou
- `cd d:`
- ...

Puis on récupère le chemin vers le dossier qui contient les codes php

On peut le faire avec un clique droit sur le dossier dans phpStorm ou autre IDE utilisé: 
- php storm : clique droit sur le dossier --> copy path/references --> absolute path


- (ajouter pour vos IDE si vous trouvez comment faire)

Après cela on peut cd + copie colle le chemin absolue pour accéder au bon dossier 

Puis on fait la commande pour lancer le serveur PHP :

 - sous windows : `php -S 127.0.0.1:8000 -n -c "./php_ini/windows/"`
 - sous macos : `php -S 127.0.0.1:8000 -n -c "./php_ini/macos/"`
 - sous debian : `php -S 127.0.0.1:8000 -n -c "./php_ini/debian/"`


**SAUF QUAND ON VEUT FAIRE UNE DEMO DE SYMFONY OU LARAVEL**

**Utilisateurs de MacOS et de Debian, MERCI DE COMPLETER**

Enfin on lance un navigateur ou l'on va entrer la recherche http://127.0.0.1:8000/ pour accéder au résultat 

Penser a refresh la page a chaque modif du fichier (raccourci F5) 

## S01E03

### Traits
Permettent de partager des services.(méthodes)\
On est pas obligé d'implémenter ces services.\
Exemple:\
MonTrait.php:
```php
<?php
namespace Ex\Trait;
trait MonTrait{
    public function serviceA(){}
    public function serviceB(){}
}
```
MaClasse.php:
```php
<?ph
namespace Ex\Class;
use Ex\Trait\MonTrait;

class MaClass{
    use MonTrait;
}

$a = new MaClass();
$a->serviceA();
$a->serviceB();
```

### Arrow functions
Permet d'avoir des fonctions en tant que variables (fonctions lambdas)\
Exemple:
```php
$hello = fn(string $inputString) => 'Hello ' . $inputString;
```

### Méthodes magiques
Les méthodes qui commencent par '__' sont spéciales en php.
Exemple: ``__construct()`` permet de définir un constructeur

Un constructeur qui prend un nom et un prénom:
```php
function __construct(string $nom, string $prenom){
    $this->nom = $nom;
    $this->prenom = $prenom;
}
```

Il y a aussi quelques commentaires dans les fichiers, n'hésitez pas à aller regarder.