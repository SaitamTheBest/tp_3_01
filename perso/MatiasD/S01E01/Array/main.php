<?php
//Créer une liste avec 1000 valeurs
$array = array_fill(0, 999, 0);
//Insert des valeurs random entre 0 et 999
$array = array_map(/**
 * @throws Exception
 */ function ($value) {
    return random_int(0, 999);
}, $array);
?>
<h1>Liste non trié</h1>
<div style="max-height: 250px; overflow : scroll;">
    <pre>
        <?php
        var_dump($array);
        ?>
    </pre>
</div>
<h1>Liste trié (croissant)</h1>
<div style="max-height: 250px; overflow : scroll;">
    <pre>
        <?php
        sort($array);
        var_dump($array);
        ?>
    </pre>
</div>
<h1>Liste trié (décroissant)</h1>
<div style="max-height: 250px; overflow : scroll;">
    <pre>
        <?php
        arsort($array);
        var_dump($array);
        ?>
    </pre>
</div>




