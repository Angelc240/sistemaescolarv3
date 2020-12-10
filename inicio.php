<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SISTEMA ESCOLAR</title>
        <link rel="stylesheet" href="node_modules/bulma/css/bulma.min.css">
    </head>
</html>
<?php
use Illuminate\Database\Capsule\Manager as DB;

require __DIR__ . '\config\database.php';
require __DIR__ . '\vendor\autoload.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA ESCOLAR</title>
    <link rel="stylesheet" href="node_modules/bulma/css/bulma.min.css">
</head>

<body>
    <div class="container">
        <h1>SISTEMA ESCOLAR</h1>
            <h2>Agregar calificacion:</h2>
            <form action="insertar.php" method="post">
                <label for="calificacion">Calificacion:</label>
                <input id="calificacion" type="text" name="calificacion">
                <input class="button" type="submit" value="guardar">
            </form>

            <form action="consultar.php" method="post">
                <input class="button" type="submit" value="Consultar">
            </form>
</body>
</html>