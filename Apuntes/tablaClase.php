<?php
$matriz =array(
    "Contabilidad"=> array("Nombre"=>"Pepe","Apellido"=>"Lopez","Salario"=>2100,"Edad"=>35),
    "Marketing"=>array("Nombre"=>"Juan","Apellido"=>"Rodriguez","Salario"=>2220,"Edad"=>41),
    "Ventas"=>array("Nombre"=>"María","Apellido"=>"Sánchez","Salario"=>2315,"Edad"=>38),
    "Administracion"=>array("Nombre"=>"Susana","Apellido"=>"Ramírez","Salario"=>1850,"Edad"=>53),
    "Direccion"=>array("Nombre"=>"Rosa","Apellido"=>"Carpio","Salario"=>3550,"Edad"=>58),
);
?>

<table border="1">
    <?php
    echo '<tr>';
    echo '<td></td>';
        foreach ($matriz["Contabilidad"] as $key =>$valor) {
            echo '<td>'.$key.'</td>';
        }
        
        echo '</tr>';
    foreach ($matriz as $indF => $fila) {
        echo '<tr>';
        echo "<td>".$indF."</td>";
        foreach ($fila as $key =>$valor) {
            echo '<td>'.$valor.'</td>';
        }
        echo '</tr>';
    }
    ?>
</table>
