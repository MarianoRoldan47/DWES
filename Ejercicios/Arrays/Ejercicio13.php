<?php
$array=array(2,5,2,4,2,6,4);


foreach ($array as $value) {
    echo ' '.$value." ";
}

foreach ($array as $key => $value) {
    
    foreach ($array as $clave => $valor) {
        if($value == $valor && $key != $clave) {
            unset($array[$key]);
        }
    }
    
}
echo '<br><br>';


foreach ($array as $value) {
    echo ' '.$value." ";
}