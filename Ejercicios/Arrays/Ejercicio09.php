<?php
$array=array(50,10,20,60,30);
$min = $array[0];
$max = $array[0];
foreach ($array as $value) {
    if($value<$min) {
        $min = $value;
    }
    if($value>$max) {
        $max=$value;
    }
    
    echo ' '.$value." ";
    
}

echo '<br><br>';

echo 'El numero menor es: '.$min;

echo '<br><br>';

echo 'El numero mayor es: '.$max;


?>