<?php
use S01E03\A;
use S01E03\B;

$monA = new A;
$monB = new B;

echo $monA->hello();
echo $monA->world();

echo $monB->hello();
echo $monB->world();