<?php


$n1 = 16; 
$n2 = 10;
$n3=12;

$max1 = ($n1 > $n2) ? $n1 : $n2;
$max2 = ($n2 > $n3) ? $n2 : $n3;

$max3 = ($max1 > $max2) ? $max1 : $max2;


echo "Largest number  "  . $max3;

?> 