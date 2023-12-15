<?php
//Création d'une classe abstraite
abstract class MyMotherAbstractClass
{
    // avec un attribut protégé
    protected $motherInteger = 10;
}

//Création d'une interface Myinterface
interface MyInterface
{
    //création d'une fonction dans l'interface
    public function afficherNombreDe1A20() : void;
}

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
    //fonction getter pour récupérer la valeur portected de la classe mère
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
    function getGoogleContentAndSave() : void {
        $response = file_get_contents("https://www.google.com");
        file_put_contents("contenuGoogle.txt", $response);
    }

    //fonction pour renvoyer le type d'une variable non typé
    function renvoiTypeDunParamNonTyper($param) : string{
        return gettype($param);
    }

    function switchEtmatchPourUnCaract($caract){
        $vowels = ['a','e','i','o','u'];
        echo "<br>";
        echo 'switch : ';
        switch ($caract){
            case in_array(strtolower($caract), $vowels):
                echo 'voyelle';
                break;
            case !in_array(strtolower($caract), $vowels):
                echo 'consonne';
                break;
            default:
                echo 'y a un problème docteur';
        };

        echo "<br>";
        echo "<br>";
        echo "match : ";
        echo match(true) {
            in_array(strtolower($caract), $vowels) => 'voyelle',
            !in_array(strtolower($caract), $vowels) => 'consonne',
            default => 'y a un problème docteur',
        }, "<br>";
    }

    function whilePlusBreak($fin): void {
        $i = 0;
        while (true){
            echo $i;
            $i++;
            if ($i >= $fin){
                break;
            }
        }
    }

    //class method qui permet d'afficher les valeur pair d'un tableau, utilise continue si elles ne le sont pas pour zapper la partie de l'affichage
    function fonctionDoetContinue(array $tab) : void
    {
        $i = 0 ;
        do{
            if (($tab[$i] % 2) == 1){ //si la valeur de tab[i] est impair
                $i++;
                continue; //continue permet de sauter la suite de la boucle
            }
            echo "<br>";
            echo "la valeur " . strval($i +1 ) . " du tableau est : "; //strval = to String
            var_dump($tab[$i]);
            $i++;
        }while ($i < sizeof($tab));
    }
    //class method that returns the currently passed HTTP GET value named test,
    //for this to work, add ?name=test at the end of the local website address
    function HTTP_GET_value(string $value) : string{
        if (isset($_GET[$value])) {
            return $_GET[$value];
        } else {
            return "HTTP GET failed, don't forget to add ?function_arg=get_value in the website address";
        }
    }

    //class method that outputs HTTP headers to redirect (HTTP 302) to another script (add a link to your script)
    function redirectHTTP (string $your_script) : void{
        //uses http code 302
        header('Location: ' . $your_script, true, 302);
        exit();
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

    public function getRequestInfo()
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
}
