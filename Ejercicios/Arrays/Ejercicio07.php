<?php
$paises=array("España", "Francia","Italia", "Alemania", "Portugal");

var_dump($paises);
unset($paises[2]);

echo '<br><br>';
var_dump($paises);

array_pop($paises);
echo '<br><br>';
var_dump($paises);
?>