<?php
$a = array (255, 0, 345, 850, 11, 1, 15, 25, 345, 720, 19);
$max = max($a); 
$min = min($a);

$format = $max;
echo "<br>";
echo sprintf($format, $num, $location);
echo "<br>";
$format = $min;
echo sprintf($format, $num, $location);
echo "<br>";
$q = $max *= $min;
echo sprintf($q , $number)."=Max * Min";

?> 