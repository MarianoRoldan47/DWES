Hola soy mariano

<?php
    echo "<br> Bienvenido <br>";
    $a=5;
    echo gettype($a);
    
    $a="pepe";
    echo "<br>".gettype($a);
    
    echo "<br> =====DATE=====<br>";
    echo "<br> =Fecha actual=<br>";
    echo "Es ".date("l, d-F-Y ")."y son las: ".date("H : i");
    
    echo "<br>".time()+24*60;
    $fecha = mktime(8,30,0,9,21,2024);
    echo "<br>".date("l, d-F-Y - H : i", $fecha);
    
    echo "<br> ". gettype($fecha);
    
    echo "<br><br> ". date_default_timezone_get();
    
    
    date_default_timezone_set("America/Caracas");
    
    echo "Es ".date("l, d-F-Y ")."y son las: ".date("H : i")." en: ".date_default_timezone_get();
    
   // echo "<br> ".$_SERVER['PATH_INFO'];
    switch (date("N")){
    case 1:
        $dia="Lunes";
        break;
    case 2:
        $dia="Martes";
        break;
    case 3:
        $dia="Miercoles";
        break;
    case 4:
        $dia="Jueves";
        break;
    case 5:
        $dia="Viernes";
        break;
    case 6:
        $dia="Sabado";
        break;
    case 7:
        $dia="Domingo";
        break;
        
    }
    
    switch (date("n")) {
        case 1:
            $mes="Enero";
            break;
        case 2:
            $mes="Febrero";
            break;
        case 3:
            $mes="Marzo";
            break;
        case 4:
            $mes="Abril";
            break;
        case 5:
            $mes="Mayo";
            break;
        case 6:
            $mes="Junio";
            break;
        case 7:
            $mes="Julio";
            break;
        case 8:
            $mes="Agosto";
            break;
        case 9:
            $mes="Septiembre";
            break;
        case 10:
            $mes="Octubre";
            break;
        case 11:
            $mes="Noviembre";
            break;
        case 12:
            $mes="Diciembre";
            break;
    }
    
    echo "<br>".$dia.", ".date(" d")." de ".$mes." de ".date(" Y");
?>