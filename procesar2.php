<!DOCTYPE html>
<html>
<head>
    <title>Procesar</title>
</head>
<body>
<h1 style="color: black">Formulario Completo</h1>
<p>
    <?php
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $pais = $_POST['pais'];
    echo "<h2>Nombre: $nombre</h2>";
    echo "<h3>Email: $email</h3>";
    echo "<h3>Pais: $pais</h3>";
    ?>
</p>
</body>
</html>
