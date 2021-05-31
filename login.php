<?php

include('conexion.php');

$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];
$query = pg_query($conn,"SELECT * FROM usuario WHERE usuario = '".$nombre."'AND contraseña = '".$pass."'");
$nr = pg_num_rows($query);

if($nr==1)
{
    header("Location: index.html");
    //echo"Bienvenido:".$nombre;

}
else if ($nr == 0)
{
    echo"Contraseña o usuario incorecto";
}


?>