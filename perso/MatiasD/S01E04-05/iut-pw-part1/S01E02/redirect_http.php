<?php
include('MyClass.php');
echo "vous avez été redirigé avec l'appel de la méthode redirectHTTP()";
echo "<br>";

$class = new MyClass(1);

//class method that returns the currently passed HTTP GET value named test
//La redirection met correctement la bonne url : http://127.0.0.1:8000/common/S01E02/redirect_http.php?name=parametre1
//parametre1 peut être changé en n'importe quoi d'autre
echo $class->HTTP_GET_value("name");
echo " <- valeur trouvée depuis l'url à partir du paramètre 'name'";
echo "<br>";


//pour revenir à avant
if (isset($_POST['activate_button'])) {
    $class->redirectHTTP("main.php");
}

echo "<form id='activationForm' method='post'>
    <button type='submit' name='activate_button'>encore une redirection (retour)</button>
</form>";

