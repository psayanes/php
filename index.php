<!DOCTYPE html>
<html>
<head>
    <title>Sitio web</title>
    <meta charset="UTF-8">
</head>
<body>
    <?php
        include "funciones2.php";
    ?>
    <h1 style="color: black">Bienvenido al sitio</h1>
    <p>
        <?php
            echo "Menu principal";
            Negrita("Elija una opcion del menu");
        ?>
    </p>
    <h5>
        <ul>
            <li><a href="index.php">Inicio</a> </li>
            <li><a href="formulario.php">Formulario</a> </li>
            <li><a href="ciclofor.php">Ciclo for</a> </li>
        </ul>
    <h6>
        <i>"
            <?php
            include "objetivo.txt";
            ?>
        </i>"

    </h6>
</h5>
</body>
</html>