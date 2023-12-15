<?php

class MyBDDClass
{
    static function connectBDD($serveur, $utilisateur, $motDePasse, $nomDeLaBase): void
    {

        try {
            // Connexion à la base de données avec PDO
            $pdo = new PDO("mysql:host=$serveur", $utilisateur, $motDePasse);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $pdo->query("CREATE DATABASE IF NOT EXISTS $nomDeLaBase");
            $pdo->query("USE $nomDeLaBase");

            $pdo->query("DROP TABLE IF EXISTS utilisateurs");
            // Création d'une table
            $requeteCreationTable = "CREATE TABLE IF NOT EXISTS utilisateurs (
                id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
                nom VARCHAR(30) NOT NULL,
                prenom VARCHAR(30) NOT NULL,
                email VARCHAR(50),
                date_inscription TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            )";

            $pdo->exec($requeteCreationTable);
            echo "Table créée avec succès.";

            // Insertion de données
            $nom = "Doe";
            $prenom = "John";
            $email = "john.doe@example.com";

            $requeteInsertion = "INSERT INTO utilisateurs (nom, prenom, email) VALUES (:nom, :prenom, :email) ";
            $statement = $pdo->prepare($requeteInsertion);
            $statement->bindParam(':nom', $nom);
            $statement->bindParam(':prenom', $prenom);
            $statement->bindParam(':email', $email);

            $statement->execute();
            echo "Données insérées avec succès.";

            // Lecture des données
            $requeteLecture = "SELECT * FROM utilisateurs";
            $resultats = $pdo->query($requeteLecture);

            echo "<br><br>Résultats de la lecture :<br>";
            while ($row = $resultats->fetch()) {
                echo "ID : " . $row['id'] . "<br>";
                echo "Nom : " . $row['nom'] . "<br>";
                echo "Prénom : " . $row['prenom'] . "<br>";
                echo "Email : " . $row['email'] . "<br>";
                echo "Date d'inscription : " . $row['date_inscription'] . "<br>";
            }

        } catch (PDOException $e) {
            die("La connexion à la base de données a échoué : " . $e->getMessage());
        } finally {
            // Fermer la connexion
            $connexion = null;
        }
    }
}