<?php
$numeros=array(3,1,4,1,5,9);
foreach ($numeros as $value) {
    echo $value." - ";
}

echo '<br>';
asort($numeros);

foreach ($numeros as $value) {
    echo $value." - ";
}

echo '<br>';
arsort($numeros);

foreach ($numeros as $value) {
    echo $value." - ";
}

?>