<?php

$N = rand();
echo "N =" . $N;

$arr = array();
for ($i = 100; $i < $N; $i++) {
    $arr[] = $i;
}
echo '<pre>';
print_r($arr);
echo '</pre>';
echo "Сумма = " . array_sum($arr);


?>