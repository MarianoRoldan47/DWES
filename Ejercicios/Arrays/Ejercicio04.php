<?php
$animales=array("gato","perro","elefante","jirafa");


echo 'Numero de elementos: '. count($animales)."<br>";

$animales[]="leon";
$animales[]="serpiente";

echo 'Numero actualizado de elementos: '. count($animales);
?>