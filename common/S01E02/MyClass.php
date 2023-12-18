<?php

include('MyMotherAbstractClass.php');
include('MyInterface.php');

//Création d'une classe qui hérite des attributs de MyMotherAbstractClass et implémente l'interface MyInterface
class MyClass extends MyMotherAbstractClass implements MyInterface
{
    //création d'une constante publique qui contient une chaine de caractère
        public CONST constante = 'Je suis une constante';

    //création d'un attribut publique
        public $variable;

    // constructeur basique pour donner une valeur a l'attribut "variable"
    public function __construct($varRandom){
        $this->variable = $varRandom;
    }
    //fonction getter pour récupérer la valeur protected de la classe mère
    public function getMotherInt() : int{
        return $this->motherInteger;
    }
    // implémentation de la fonction de l'interface
    public function afficherNombreDe1A20() : void
    {
        for ($i = 1; $i <= 20; $i++) {
            echo $i;
            echo " ";
        }
    }

    /**
      * @return array Sort an array of elements
      */
    //fonction pour trié un tableau
    function sortList($myArray) : array {
        arsort($myArray);
        return $myArray;
    }
    //class method that creates a JPEG image representing a red circle and the word "I AM [your initials] & I LOVE PHP" over a blue background and saves it on disk
    //fonction pour créer et sauvegarder une image avec du texte dessus, fond bleu, cercle rouge, texte dans cercle
    function createImageAndSave(string $name) : void{
        //initialisation variable
        $height = 200;
        $width = 200;

        //création image
        $img = imagecreate($width, $height,);

        //création texte
        $text = "I AM " . $name . " & I LOVE PHP";

        //color le fond de l'image
        imagecolorallocate($img, 0, 0, 255);

        //crée la couleur du cercle puis fait crée le dit texte sur l'image
        $circle_color = imagecolorallocate($img, 255, 0, 0);
        imagefilledellipse($img, $width / 2, $height / 2, $width, $height, $circle_color);

        //couleur du texte et gère son emplacement
        $text_color = imagecolorallocate($img, 255, 255, 255);
        imagestring($img, 5, 5, $height /2 - 10,  $text, $text_color);

        //sauvegarder l'image sur le disque
        imagejpeg($img, "monImage.jpeg");
    }

    //class method that writes the contents of www.google.com into a file
    //récupère le contenu de la page google et le met dans un fichier .txt
    function getGoogleContentAndSave() : void {
        $response = file_get_contents("https://www.google.com");
        file_put_contents("contenuGoogle.txt", $response);
    }

    //class method that outputs HTTP headers to redirect (HTTP 302) to another script (add a link to your script)
    function redirectHTTP (string $your_script) : void{
        //uses http code 302
        header('Location: ' . $your_script, true, 302);
        exit();
    }


    //class method that returns the type of an given, untyped parameter
    //fonction pour renvoyer le type d'une variable non typé
    function renvoiTypeDunParamNonTyper($param) : string{
        return gettype($param);
    }

    //class method that returns an array containing the name of the current host, server and client IP, and request method
    public function getRequestInfo(): array
    {
        // Tableau pour stocker les informations
        $info = array();

        /*
         * Pour chaque ligne, on teste avec un test ternaire si la variable existe sur le serveur (isset), si elle existe on la retourne sinon on retourne null
         */
        // Nom de l'hôte
        $info['host'] = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : null;

        // Adresse IP du serveur
        $info['server_ip'] = isset($_SERVER['SERVER_ADDR']) ? $_SERVER['SERVER_ADDR'] : null;

        // Adresse IP du client
        $info['client_ip'] = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : null;

        // Méthode de la requête
        $info['request_method'] = isset($_SERVER['REQUEST_METHOD']) ? $_SERVER['REQUEST_METHOD'] : null;

        // Retourner le tableau d'informations
        return $info;
    }

    //class method that returns the currently passed HTTP GET value named test,
    //for this to work, add ?test=test at the end of the local website address
    function HTTP_GET_value(string $value) : string{
        if (isset($_GET[$value])) {
            return $_GET[$value];
        } else {
            return "HTTP GET failed, don't forget to add ?function_arg=get_value in the website address";
        }
    }

    function fnRam()
    {
    //class method that returns the currently consumed RAM and the maximum RAM your script can use (PHP maximum, not the current one)
        echo "<br>";
        $usedMomory = memory_get_usage($real_usage = false); // récupère la ram, false permet de récupéré la ram utilisé par le script
        $totalMemory = memory_get_usage($real_usage = true);// true permet de récupérer la ram maximal alloué
        echo "mémoire maximum utilisable : ";
        var_dump($totalMemory);

        echo "<br>";

        echo "mémoire utilisé actuellement par le script : ";
        var_dump($usedMomory);

    }
//fonction pour utiliser et prouver les switch et match à l'aide de la vérification si un caractère est une voyelle ou non
    function switchEtmatchPourUnCaract($caract){
        $vowels = ['a','e','i','o','u'];
        echo "<br>";
        echo 'switch : ';
        switch ($caract){ // utilise le switch pour vérifier si la caract est une voyelle ou non
            case in_array(strtolower($caract), $vowels): // cas ou c'est une voyelle
                echo 'voyelle';
                break;
            case !in_array(strtolower($caract), $vowels): // cas ou ce n'est pas une voyelle
                echo 'consonne';
                break;
            default:
                echo 'y a un problème docteur'; //cas par défaut
        };

        echo "<br>";
        echo "<br>";
        echo "match : ";
        echo match(true) {  // même chose avec match
            in_array(strtolower($caract), $vowels) => 'voyelle',  //si c'est une voyelle
            !in_array(strtolower($caract), $vowels) => 'consonne', // si ce n'est pas une voyelle
            default => 'y a un problème docteur', // cas par défaut
        }, "<br>";
    }

    function whilePlusBreak($fin): void {
        $i = 0;
        while (true){ //boucle qui va utiliser break pour se fermer toute seul quand i atteint la valeur donné
            echo $i;
            $i++;
            if ($i >= $fin){
                break;
            }
        }
    }

//class method qui permet d'afficher les valeurs impaires d'un tableau, utilise continue si elles ne le sont pas pour zapper la partie de l'affichage
    function fonctionDoetContinue(array $tab) : void
    {
        $i = 0 ;
        do{
            if (($tab[$i] % 2) == 0){ //si la valeur de tab[i] est pair
                $i++;
                continue; //continue permet de sauter la suite de la boucle
            }
            echo "<br>";
            echo "la valeur " . strval($i +1 ) . " du tableau est : "; //strval = to String
            var_dump($tab[$i]);
            $i++;
        }while ($i < sizeof($tab));
    }
}
