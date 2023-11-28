<?php
$fileOne = fopen("txt.txt", "w");
fwrite($fileOne, "mom");
fclose($fileOne);