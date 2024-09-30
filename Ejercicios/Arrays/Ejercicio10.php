<?php

$cadena = "Hola mundo";

echo 'Cadena de texto: '.$cadena;

echo '<br><br>';

$cadenaSinEspacios= str_replace(" ", "", $cadena);

echo "Longitud sin espacios: ".strlen($cadenaSinEspacios);

echo '<br><br>';

echo 'Longitud con espacios: '. strlen($cadena);

?>