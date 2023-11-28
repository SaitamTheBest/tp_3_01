<?php
//Random array getting sorted
$arraySorts = array_fill(0,999, 0);
$array = array_map(random_int(0, 999), $arraySorts)
?>
<div style="max-height: 500px; overflow : scroll;">
    <pre>
        <?php
            var_dump($array);
        ?>
    </pre>
</div>




