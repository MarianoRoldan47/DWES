<?php
$productos=array(
    array("nombre"=>"sandia","precio"=>1.80,"cantidad"=>5),
    array("nombre"=>"melon","precio"=>1.50,"cantidad"=>10),
    array("nombre"=>"melocotones","precio"=>1,"cantidad"=>20),
    array("nombre"=>"platanos","precio"=>1.20,"cantidad"=>25),
    array("nombre"=>"huevos","precio"=>2.50,"cantidad"=>30)
    );

    var_dump($productos[1]);
    echo '<br><br>';
    foreach ($productos as $fila) {
        foreach ($fila as $key => $value) {
            echo $key.": ".$value." <br>";
        }
        
        echo '<br><br>';
    }

?>