<?php
$colores=array(0=>"rojo",1=>"verde",2=>"azul",3=>"amarillo");

echo "Primer elemento: ".$colores[0]."<br>";

echo "Tercer elemento: ".$colores[2]."<br>";

$colores[]="naranja";

for ($i=0;$i<= count($colores)-1;$i++){
    echo $colores[$i]." - ";
}

?>