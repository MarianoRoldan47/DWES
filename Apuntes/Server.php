

<table border="1">
    <tr>
        <th>Indice</th>
        <th>Valor</th>
    </tr>
<?php
foreach ($_SERVER as $indice =>$valor ) {
    echo '<tr>'
    . "<td>".$indice."</td>"
            . "<td>".$valor."</td>";
}
?>
</table>
<br><br>

