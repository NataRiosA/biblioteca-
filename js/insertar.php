<html>
<body>
<?php
	session_start();
		include ("conexion.php");
		
		$con=conectar();
	
if ($con) {
		$Nombre= $_POST ['nombre'];
		$Apellido= $_POST ['apellido'];
		$Cedula= $_POST ['cedula'];
		$genero= $_POST ['genero'];
		$email= $_POST ['email'];
		$usuario= $_POST ['usuario'];
		$password= $_POST ['password'];
		$preferencias= $_POST ['preferencias'];
		$direccion= $_POST ['direccion'];

		$consulta="insert into usuario values ('$Nombre','$Apellido','$Cedula','$genero','$email','$usuario','$password','$preferencias','$direccion')";
		
		$resultado=pg_query($con,$consulta);
		
		if ($resultado) {
			echo "perfil almacenado. <br />";
		}
		else {
			echo "error en la ejecución de la consulta. <br />";
		}
		
		if (pg_close($con)){ 
			echo "desconexion realizada. <br />";
		} 
		else {
			echo "error en la desconexión";
		}
}

?>
<br><br>
<body/>
<html/>
