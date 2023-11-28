<?php
//Random array getting sorted
$arraySorts = array_fill(0,999, random_int(0,999));
?>
<div style="max-height: 250px; overflow : scroll;">
    <pre>
        <?php
            var_dump($arraySorts);
        ?>
    </pre>
</div>




