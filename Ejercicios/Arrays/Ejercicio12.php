<?php

$array = array(50,20,10,8,3);
$suma = 0;

foreach ($array as $value) {
    $suma+=$value;
    
    echo ' '.$value." ";
    
}

echo '<br><br>';

echo 'La suma total es: '.$suma;