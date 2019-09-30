<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
</head>
<body>
    <h2 style="color: black">Enviar por metodo GET</h2>
    <form method="GET" action="procesar.php">
        <p>Digite su nombre</p>
        <input type="text" name="nombre">
        <input type="submit" value="Enviar">
    </form>
    <h2 style="color: black">Enviar por metodo POST</h2>
    <form method="POST" action="procesar2.php">
        <p>Digite su nombre</p>
        <input type="text" name="nombre">
        <p>Digite su email</p>
        <input type="text" name="email">
        <p>Seleccione su pais</p>
        <select name="pais">
            <option value="UY">Uruguay</option>
            <option value="AR">Argentina</option>
            <option value="BR">Brasil</option>
        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>