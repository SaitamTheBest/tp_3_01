Explications pour le début du TP S01E02:

Allez là où est situé votre langage PHP
renommez votre fichier php.ini-development en php.ini puis écrivez à la fin
memory_limit = 512M
max_execution_time = 60
upload_max_filesize = 50M
date.timezone = "Europe/Paris"

puis allez dans la console (CMD ou Console de PHPStorm)
faites les commandes:
php -i
php -i | findstr "php.ini" (sur windows)
php -i | grep "php.ini" (sur linux)

Le tp peut etre fait apres ca 