=<!DOCTYPE html>
<html>
<head>
    <title>Ciclo While</title>
    <meta charset="UTF-8">
</head>
<body>
<h1 style="color: black">Ciclo While</h1>
<h1>
    <?php
    $contador = 0;
    while ($contador <= 30){
        echo "$contador<br>";
        $contador++;
        //$contador +=1;
    }
    echo "el   contador ha llegado a ".($contador -1)
    ?>
</h1>
</body>
</html>