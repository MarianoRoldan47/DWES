<?php
/*===== Usando while =====*/
$numero=1;

echo "<table border=1>";
$i=1;
while ($i<=5) {
    echo '<tr>';
    $j=1;
    while ($j<=7) {
        echo '<td>'.$numero."</td>";
        $numero++;
        
        $j++;
    }
    echo '</tr>';
    
    $i++;
}
echo '</table>';


/*===== Usando Do While =====*/

$numero=1;

echo "<table border=1>";
$i=1;
do{
    echo '<tr>';
    $j=1;
    do {
        echo '<td>'.$numero."</td>";
        $numero++;
        
        $j++;
    }while ($j<=7);
    
    echo '</tr>';
    
    $i++;
} while (($i<=5));
echo '</table>';


?>
