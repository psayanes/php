<!DOCTYPE html>
<html>
<head>
    <title>Practica 2</title>
</head>
<body>
<h1 style="color: red">Practica 2</h1>
<h1>
    <?php
    $nombre = 'Pablo';
    $nom1 = $nombre;
    echo '<h2 style="color: green">'.$nombre.'</h2>';
    $nombre = 'Juan';
    echo '<h2 style="color: green">'.$nombre.'</h2>';
    //$nombreCompleto = '<h3>El nombre completo es '.$nombre.' '.$nom1.'</h3>';
    $nombreCompleto = "<h3>El nombre completo es $nombre $nom1</h3>";
    echo $nombreCompleto;
    echo "el largo de la variable nombre completo es strlen($nombreCompleto)";
    $num1 = 10;
    $num2 = 5;
    $suma = $num1 + $num2;
    $resta = $num1 - $num2;
    echo '<h3>La suma es = '.$suma.'</h3>';
    echo '<h3>La resta es = '.$resta.'</h3>';
    const PII = 3.14;
    echo '<h3>'.PII.'</h3>';
    //  const PII = 3.1416;
    echo '<h3>'.PII.'</h3>';
    ?>
</h1>
</body>
</html>