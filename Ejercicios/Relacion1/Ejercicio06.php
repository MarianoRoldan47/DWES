<?php

/*===== Apartado A =====*/
$inicioDoWhile=1;
$sumaDoWhile=0;

do{
    $sumaDoWhile+=$inicioDoWhile;
    $inicioDoWhile++;
}while ($inicioDoWhile<=100);

echo "La suma con do while es: ".$sumaDoWhile."<br>";

/*===== Apartado B =====*/
$inicioWhile=1;
$sumaWhile=0;

while ($inicioWhile<=100){
    $sumaWhile+=$inicioWhile;
    $inicioWhile++;
}

echo "<br>La suma con while es: ".$sumaWhile."<br>";

/*===== Apartado C =====*/
$sumaFor=0;

for ($i=1;$i<=100;$i++){
    $sumaFor+=$i;
}

echo "<br>La suma con for es: ".$sumaFor."<br>";

?>


