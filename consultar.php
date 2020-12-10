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

require __DIR__ . '\vendor\autoload.php';
require __DIR__ . '\config\database.php';

$users = DB::table('calificaciones')
->get();
$promedio = DB::table('calificaciones')->avg('calificacion');
$promedio = number_format($promedio, 1);

echo <<<_TABLE
<table class="table">
<thead>
    <tr>
        <th>#ID</th>
        <th>Calificacion</th>
        <th>Alumno</th>
        <th colspan='2'>Operaciones</th>
    </tr>
</thead>
<tfoot>
    <tr>
        <th>promedio:</th>
        <th>$promedio</th>
        <th></th>
    </tr>
</tfoot>
<tbody>
_TABLE;
foreach($users as $fila){
echo <<<_ROW
    <tr>
        <th>$fila->idcalificaciones</th>
        <td><center>$fila->calificacion</center></td>
        <td><a class='button' href='delete.php?id={$fila->idcalificaciones}'>ELIMINAR</a></td>
        <td>
            <form action "update.php" method="post">
                <input id="idcalificaciones" type="text" name="idcalificaciones" 
                value="{$fila->idcalificaciones}" hidden>
                <input id="calificacion" type="text" name="calificacion" size="3">
                <input class="button" type="submit" value="ACTUALIZAR">
            </form>
        </td>
    </tr>
_ROW;

}
echo "</tbody></table>
<a class='button' href='inicio.php'>REGRESAR</a>";