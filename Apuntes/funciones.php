<?php
function salario_bruto(&$salario=2000,&$retenciones=4,$comision=100){
    $salario+=$comision;
    $retenciones=$salario*($retenciones/100);
    
    $salarioBruto=$salario-$retenciones;
    
}

?>

