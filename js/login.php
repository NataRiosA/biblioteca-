<?php
// detalles de la conexion
$conn_string = "host=ec2-54-160-96-70.compute-1.amazonaws.com port=5432 dbname=d45j0s3069eavd user=crvcnegimvpbuh password=393dbb22980757878bbfa0374f0805b787058b58f1d8a74764f3cfb50d0ffe8b options='--client_encoding=UTF8'";

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
    header("Location: index.html");
    //echo"Bienvenido:".$nombre;

}
else if ($nr == 0)
{
    echo"Contraseña o usuario incorecto";
}


?>