<?php
$persona=array("nombre"=>"Juan","edad"=>25,"ciudad"=>"Madrid");

echo "Nombre: ".$persona["nombre"]."<br>";

echo "Ciudad: ".$persona["ciudad"]."<br>";

echo '<br>';
$persona["profesion"]="Ingeniero";

foreach ($persona as $key => $value) {
    echo $key.": ".$value."<br>";
}
?>