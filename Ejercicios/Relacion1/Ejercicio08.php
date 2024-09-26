<?php

$numero=1;
$suma=0;
for ($i=1;$i<=100;$i++){
    
    while($numero%2!=0){
        $numero++;
    }
    
    $suma+=$numero;
    
    echo $numero;
    $numero++;
}

echo "La suma es: ".$suma;
?>