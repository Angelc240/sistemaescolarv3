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

DB::table('calificaciones')->insert(
    ['calificacion' => $_POST['calificacion']]
);

echo "<h1>DATOS GUARDADOS</h1><br>
<a class='button' href='inicio.php'>REGRESAR</a>";

?>