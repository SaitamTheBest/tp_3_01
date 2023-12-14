<u>Explications pour le début du TP S01E02:</u>

**Cette partie sert uniquement d'explications, vous utiliserez le php.ini inclut dans le projet grâce à la commande correspondante, vous pouvez passer directement à l'installation de MySQL**

Chercher le php.ini dans votre PC grâce à la commande: 

``php -i | findstr "php.ini"``
qui va permettre trouver le chemin absolu vers le php.ini


ou

``php -i | findstr "php.ini-development"``

Si vous le trouvez grâce à cette commande, renommez le en php.ini.
Puis écrivez ça à la fin:
```ini 
memory_limit = 512M
max_execution_time = 60
upload_max_filesize = 50M
date.timezone = "Europe/Paris"
```
Et enfin, si vous avez besoin d'une extension, décommentez la ligne de votre extension, par exemple
extension=pdo_mysql


<u>Installation de MySQL:</u>

Allez sur ce lien puis téléchargez celui que vous voulez: https://dev.mysql.com/downloads/installer/
![install_mysql_1.png](ressources_readme%2Finstall_mysql_1.png)
![install_mysql_2.png](ressources_readme%2Finstall_mysql_2.png)
![install_mysql_3.png](ressources_readme%2Finstall_mysql_3.png)
Ensuite vous faites **Next** ou **Execute** jusqu'à pouvoir choisir les identifiants de votre base de données.

Vous mettez User : ``root`` et mot de passe : ``root``.

Puis vous faites **Next** et **Execute** jusqu'à ce que l'installation soit terminée.




to do :

class method that outputs HTTP headers to redirect (HTTP 302) to another script (add a link to your script)

class method that returns an array containing the name of the current host, server and client IP, and request method

class method that returns the currently passed HTTP GET value named test

class method that returns the currently consumed RAM and the maximum RAM your script can use (PHP maximum, not the current one)

class method that uses a do() construct that uses a continue keyword to print the numeric values of a given array that are odd

