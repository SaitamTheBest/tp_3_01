Il faut faire des modification sur le php.ini. Pour le trouver il faut faire la commande : 

- *php -i | findstr " php.ini "*

Puis récupérer le chemin vers celui-ci.

Ensuite il faut modifier dans php.ini :

- Il faut ,si vous n'avez pas fait le changement du TP2, rajouter ceci en fin de fichier :
memory_limit = 512M
max_execution_time = 60
upload_max_filesize = 50M
date.timezone = "Europe/Paris"


Puis en utilisant Crtl-f pour rechercher un mot précis (ouvrer le php.ini dans un bloc-note), il faut enlever des points virgules devant certaines pour ligne (c'est pour activer les packages) :   

- fileinfo
- zip
- pdo my-sql 

Ensuite il faut installer Composer, il y a alors deux moyen :

Dans les deux cas il faut aller sur ce site : https://getcomposer.org/download/

- Pour ce qui ont windows vous pouvez installer l'installer appeler : Composer-Setup.exe
Quand vous allez l'installer cela va installer sur votre ordi Composer.
Il sera installer sur tout votre ordi et vous pourrez le désinstaller au niveau de panneau de configuration de windows. (normalement)

- Pour le deuxième cas il faut faire les 4 lignes de commande suivantes dans votre dossier S01E04-05 :
- *php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"*
- *php -r "if (hash_file('sha384', 'composer-setup.php') === 'e21205b207c3ff031906575712edab6f13eb0b361f2085f1f1237b7126d785e826a450292b6cfd1d64d92e6563bbde02') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"*
- *php composer-setup.php*
- *php -r "unlink('composer-setup.php');"*

C'est commande vous permettre d'installer Composer mais seulement dans votre dossier.


Ensuite dans ce dossier faire les commandes suivantes pour installer Laravel : 

**Warning** Si vous avez installer Composer avec l'installer :
*composer create-project laravel/laravel*
*iut-pw-laravel*

**Warning** Si vous avez installer Composer avec les lignes de commandes :
*php composer.phar create-project laravel/laravel*
*iut-pw-laravel*

Puis faire ces deux ligne de commande pour enfin lancer un serveur local:
*cd iut-pw-laravel*
*php artisan serve* **(commande pour activer le serveur)**

Pour y accéder il suffit de mettre 127.0.0.1:8000 dans votre barre de recherche.


Ensuite pour installer Symphony il faut revenir dans votre dossier S01E04-05 puis : 

**Warning** Si vous avez installer Composer avec l'installer :
*composer create-project symfony/skeleton iut-pw-symfony*

**Warning** Si vous avez installer Composer avec les lignes de commandes :
*php composer.phar create-project symfony/skeleton iut-pw-symfony*

Puis faire ces 4 commande pour finalement activer le serveur local : 
- *cd iut-pw-symfony*
- *composer require webapp* (autre installation, il faudra taper "y" pour finir l'installation)
- *cd public*
- *php -S 127.0.0.1:8000* **(commande pour activer le serveur)**


Pour y accéder il suffit de mettre 127.0.0.1:8000 dans votre barre de recherche.

Pour faire les test :

Dans le dossier S01E04-05, créer un dossier iut-pw-part1 puis y copier les dossiers des 3 premiers TP.

Puis dans S0104-05 :

Il faut faire la commande composer init puis appuyer sur la touche "entrer" jusqu'à que l'on vous propose de taper yes. A ce moment il faudra mettre "no". Pareil pour la ligne suivante. Après cela vous pourez continuer d'appuyer sur entrée jusqu'à la fin de l'installation.

Puis il faudra faire :

**Warning** Si vous avez installer Composer avec l'installer :
*composer require --dev phpstan/phpstan*

**Warning** Si vous avez installer Composer avec les lignes de commandes :
*php composer.phar require --dev phpstan/phpstan*

**Phpstan est maintenant installé.**

Avec ces 3 commandes vous pourrez vérifier les erreur/warning dans : 
- Notre code
*php vendor/bin/phpstan analyse --level max iut-pw-part1*
- Laravel
*php vendor/bin/phpstan analyse --level max iut-pw-laravel/app*
- Symphony
*php vendor/bin/phpstan analyse --level max iut-pw-symfony/src*

**Pour le TP5**

Il suffit de faire la commande suivante dans le dossier S01E04-05 :

*composer require --dev phpunit/phpunit*

Et hop ! Phpunit est installé.

Toujours dans le même dossier faite la commande suivante pour éxécuter les tests :

*./vendor/bin/phpunit*


Voilà ces la Fin !!!! 
 





