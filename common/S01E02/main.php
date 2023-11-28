<?php
$array = array_fill(0, 999, 0);
$array = array_map(/**
 * @throws Exception
 */ function ($value) {
    return random_int(0, 999);
}, $array);
?>
<div style="max-height: 250px; overflow : scroll;">
    <pre>
        <?php
        var_dump($array);
        ?>
    </pre>
</div>
<div style="max-height: 250px; overflow : scroll;">
    <pre>
        <?php
        sort($array);
        var_dump($array);
        ?>
    </pre>
</div>
<div style="max-height: 250px; overflow : scroll;">
    <pre>
        <?php
        arsort($array);
        var_dump($array);
        ?>
    </pre>
</div>




