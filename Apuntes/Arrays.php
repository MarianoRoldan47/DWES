<?php
$a[8]="pepe";

echo $a[8];

$a[2]="Antonio";

$a[]="Juan";
$a["edad"]= 25;
$a[5]="Rosa";

echo count($a);

$b=array("codigo"=>1,"nombre"=>"pepe","apellido"=>"López");

var_dump($b);

foreach ($b as $value) {
    echo $value."<br>";
}

foreach ($b as $key => $value) {
    echo $key." - ".$value."<br>";
}
      
echo count($b);

$c=array();



?>