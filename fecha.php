<!DOCTYPE html>
<html>
<head>
    <title>Fecha en PHP</title>
    <meta charset="UTF-8">
</head>
<body>
<h1 style="color: black">Fecha en PHP</h1>
<h3>
    <?php
        //fecha de hoy
        setlocale(LC_ALL,"es_UY.UTF-8");
        echo 'Fecha de hoy: ';
        echo date('d'.'-'.'m'.'-'.'Y');
        echo strftime("hoy es %A <br>");
        //echo date('m');
        //echo date('Y');
        $miFecha= gmmktime(12,0,0,1,15,2089);
        setlocale(LC_TIME, 'es_ES.UTF-8');
        echo 'Después de setlocale es_ES.UTF-8 strftime devuelve: '.strftime("%A, %d de %B de %Y %H:%M", $miFecha).'<br/>';
        echo 'Fecha actual: '.strftime("%A, %d de %B de %Y %H:%M").'<br/>';
        date_default_timezone_set ('Europe/Madrid');
        echo 'Establecida zona horaria Europe/Madrid obtenemos: '.strftime("%A, %d de %B de %Y %H:%M", $miFecha).'<br/>';
        echo 'Ahora fecha actual es: '.strftime("%A, %d de %B de %Y %H:%M").'<br/>';
        setlocale(LC_ALL, 'es_ES');
        $fecha = strftime("Hoy es %A día %d de %B");
        echo $fecha; // Devuelve: Hoy es viernes día 06 de noviembre
        // Ahora establecemos una fecha cualquiera:
        $date = new Datetime("2014-6-7");
        $fecha = strftime("La fecha es del año %y y su mes es %B", $date->getTimestamp());
        var_dump($fecha); // Devuelve: La fecha es del año 14 y su mes es junio
    ?>
</h3>
</body>
</html>