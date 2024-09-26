<?php
$a= rand(1,100);
$b= rand(1,100);
$c=rand(1,100);

while ($a<$b || $a<$c||$b<$c) {
    if($a<$b) {
        $aux=$a;
        $a=$b;
        $b=$aux;
    }
    if($b<$c) {
        $aux=$b;
        $b=$c;
        $c=$aux;
    }
}

echo "El mayor es: ".$a." el segundo: ".$b." y el ultimo: ".$c;


?>