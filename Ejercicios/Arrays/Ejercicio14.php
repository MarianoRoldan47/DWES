<?php
$array =array(5,5,7,2,8,7,5,10,10,2,2,5);

foreach (array_count_values($array) as $key => $value) {
    echo 'El elemento '.$key.' ha aparecido: '.$value."<br><br>";
}