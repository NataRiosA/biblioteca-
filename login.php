<?php
// detalles de la conexion
$conn_string = "host=ec2-54-90-211-192.compute-1.amazonaws.com port=5432 dbname=dc110dq94k9s9k user=uqklfdmkazqmix password=dd986026523d25807783d81ce26bf9743e68964dfce989fdf9db39369daa04da options='--client_encoding=UTF8'";

// establecemos una conexion con el servidor postgresSQL
$dbconn = pg_connect($conn_string);

// Revisamos el estado de la conexion en caso de errores. 
if(!$dbconn) {
echo "Error: No se ha podido conectar a la base de datos\n";
}
$nombre = $_POST["txtusuario"];
$pass = $_POST["txtpassword"];
$query = pg_query($dbconn,"SELECT * FROM usuario WHERE usuario = '".$nombre."'and password = '".$pass."'");
$nr = pg_num_rows($query);

if($nr==1)
{
    header("Location: inicio.html");
    //echo"Bienvenido:".$nombre;

}
else if ($nr == 0)
{
    echo"Contraseña o usuario incorecto";
}


?>