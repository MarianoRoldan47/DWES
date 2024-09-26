<?php
$numero=1;

echo "<table border=1>";
for ($i=1;$i<=5;$i++) {
    echo '<tr>';
    for ($j=1;$j<=7;$j++) {
        echo '<td>'.$numero."</td>";
        $numero++;
        }
    echo '</tr>';
}
echo '</table>';
?>