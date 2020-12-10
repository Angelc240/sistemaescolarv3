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

$user = DB::table('usuarios')
->where('nombreusuario', $_POST['usuario'])->first();

$mensaje ='';
if ($user->password == $_POST['password']){
    if ($user->password == 'profesor'){
        $mensaje ="<h1>bienvenido profesor</h1>
        <br><a href='inicio.php'>ENTRAR AL SISTEMA ESCOLAR</a>";
    }
    else
    {
        $mensaje ="<h1>bienvenido alumno</h1>
        <br><a href='alumno.php'>ENTRAR AL SISTEMA ESCOLAR</a>";
    }

}
else{
    $mensaje ="<h1> USUARIO Y/O CONTRASEÑA ERRONEOS</h1>
    <br><a href='index.html'>REGRESAR</a>";
}

echo $mensaje;