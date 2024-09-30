<?php
$edades = array(20, 30, 40, 25, 35);

var_dump($edades);

echo '<br><br>';

echo (in_array(25, $edades)? array_search(25, $edades): " No se ha encontrado ");
?>