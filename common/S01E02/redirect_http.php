<?php
include('MyClass.php');
echo "vous avez été redirigé avec l'appel de la méthode redirectHTTP()";

$class = new MyClass(1);

//pour revenir à avant
if (isset($_POST['activate_button'])) {
    $class->redirectHTTP("main.php");
}

echo "<form id='activationForm' method='post'>
    <button type='submit' name='activate_button'>encore une redirection (retour)</button>
</form>";