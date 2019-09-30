<!DOCTYPE html>
<html>
<head>
    <title>Swtich</title>
    <meta charset="UTF-8">
</head>
<body>
<h1 style="color: black">Switch</h1>
<h2>
    <?php
    $codigo = 'UY';

    switch ($codigo) {
        case 'UY':
            echo 'Uruguay<br>';
            break;
        case 'AR':
            echo 'Argentina<br>';
            break;
        case 'BR':
            echo 'Brasil<br>';
            break;
        default:
            echo 'No se encontro el pais<br>';
            break;
    }
    ?>
</h2>
</body>
</html>