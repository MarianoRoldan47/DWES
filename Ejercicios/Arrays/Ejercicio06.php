<?php
$nombres=array("Ana","Luis","Carlos","Maria");

var_dump(array_reverse($nombres));

echo "<br><br>";

echo "<br><br>";
echo "Carlos esta en el array: ". (in_array("Carlos", $nombres)? "true":"false");

echo "<br><br>";
echo "<br><br>";
array_push($nombres, "Juan");


var_dump($nombres);
?>