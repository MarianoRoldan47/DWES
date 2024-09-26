<?php
echo '<br>MATRICES<br>';

$matriz[][]="pepe";
$matriz[5][]="antonio";

echo $matriz[5][0]."<br>";

$matriz[][]="miguel";

echo $matriz[6][0]."<br>";

$matriz[0]["apellido"]="Lopez";
$matriz[6]["edad"] = 34;
echo "<br>Recorrido de array<br><br>";

foreach ($matriz as $indF => $fila ) {
    echo $indF.'<br>';
    
    foreach ($fila as $indC => $value) {
        echo "<br>".$indC." ".$value." ";
    }
    
    echo '<br><br>';

    
    
}

echo "Filas: ".count($matriz)."<br>";

echo "Columnas fila 6: ". count($matriz[6])."<br>";

echo "Total". count($matriz,1)."<br>";


$matriz2 =array(
    0=> array("codigo"=>1,"nombre"=>"Pepe","salario"=>2000),
    1=>array("codigo"=>2,"nombre"=>"Maria","salario"=>3000),
    2=>array("codigo"=>3,"nombre"=>"Jose","salario"=>2500)
);

foreach ($matriz2 as $indF => $fila ) {
    
    
    foreach ($fila as $indC => $value) {
        echo "\t".$indC."\t";
    }
    
    echo '<br>';
    echo $indF.'<br>';
    foreach ($fila as $indC => $value) {
        echo "\t".$value."\t";
    }
    
    echo '<br><br>';  
}
echo "<table border=\"1\">";
echo '<tr>'
. '<th>Indice</th>'
        . '<th>Valor</th>'
        . '</tr>';

foreach ($_SERVER as $indice =>$valor ) {
    echo '<tr>'
    . "<td>".$indice."</td>"
            . "<td>".$valor."</td>";
}
echo '</table>';
echo '<br><br>';
?>

