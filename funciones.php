<!DOCTYPE html>
<html>
<head>
    <title>Funciones</title>
    <meta charset="UTF-8">
</head>
<body>
<h1 style="color: black">Funciones</h1>
<h1>
    <?php
    $salu = "hola";
    $nom = 'Pablo';
    $ape = 'Sayanes';

    function Saludar($saludo, $nombre, $apellido){
        echo $saludo." ".$nombre." ".$apellido;
    }
    Saludar($salu, $nom, $ape);

    //$num1 = 15;
    //$num2 = 45;
    function Sumar($num1, $num2){
        //$suma = $num1 + $num2;
        //return $suma;
        return $num1 + $num2;
    }
    $suma = Sumar(15,12);
    echo "<br><br>La suma es = $suma";
    echo "<br>La suma es = ".Sumar(15,12);
    ?>
</h1>
</body>
</html>