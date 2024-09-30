<?php
$array = array(20,30,10,5,2);
$suma = 0;

foreach ($array as $value) {
    $suma+=$value;
    
    echo ' '.$value." ";
}
echo '<br><br>';
echo 'El promedio es: '.($suma/ count($array));