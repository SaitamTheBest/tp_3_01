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
![install_mysql_4.png](ressources_readme%2Finstall_mysql_4.png)

Puis vous faites **Next** et **Execute** jusqu'à ce que l'installation soit terminée.

Ensuite, aller dans le main.php du TP2 dans l'appel de la méthode connectBDD() et remplacer WL par vos initiales .
