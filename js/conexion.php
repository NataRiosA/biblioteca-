<?php
function conectar(){
// detalles de la conexion
$conn_string = "host=ec2-54-160-96-70.compute-1.amazonaws.com port=5432 dbname=d45j0s3069eavd user=crvcnegimvpbuh password=393dbb22980757878bbfa0374f0805b787058b58f1d8a74764f3cfb50d0ffe8b options='--client_encoding=UTF8'";

postgres://crvcnegimvpbuh:393dbb22980757878bbfa0374f0805b787058b58f1d8a74764f3cfb50d0ffe8b@ec2-54-160-96-70.compute-1.amazonaws.com:5432/d45j0s3069eavd


// establecemos una conexion con el servidor postgresSQL
$dbconn = pg_connect($conn_string);

// Revisamos el estado de la conexion en caso de errores. 
if(!$dbconn) {
echo "Error: No se ha podido conectar a la base de datos\n";
} else {
//echo "Conexión exitosa\n";
return $dbconn;
}
}

// Close connection
// pg_close($dbconn);

?>