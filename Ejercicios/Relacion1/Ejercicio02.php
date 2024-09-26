<?php
$numeroAzar= rand(1,100);

echo "<table border=1>";
for ($i=1;$i<=10;$i++) {
    echo '<tr>';
    for ($j=1;$j<=10;$j++) {
        while($numeroAzar%2 == 0) {
            $numeroAzar++;
        }
        
        echo '<td>'.$numeroAzar."</td>";
        $numeroAzar++;
        }
    echo '</tr>';
}
echo '</table>';
?>