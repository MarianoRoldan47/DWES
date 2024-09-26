<?php
$ano=2024;

if($ano%4==0) {
    if($ano%100==0) {
        if($ano%400==0) {
            echo "El año: ".$ano." es bisiesto";
        }
        else {
            echo "El año: ".$ano." no es bisiesto";
        }
    }
    else {
        echo "El año: ".$ano." es bisiesto";

    }
}
else{
    echo "El año: ".$ano." no es bisiesto";
}

?>