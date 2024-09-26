<html>
    <head>
        <title></title>
    </head>
    <body>
        <?php
        include 'cabecera.php';
        require_once 'funciones.php';
        ?>
        Aqui estaria el contenido de mi web<br>
        
        <?php
        $sal=1000;
        $ret=2;
        $com=100;
        
        salario_bruto($sal, $ret, $com);
        echo 'El salario es: ' . $sal."<br>";
        echo 'Las retenciones son: '.$ret;
        
        
        ?>
        
        
    </body>
</html>


