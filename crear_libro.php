<?php
	session_start();
		include ("conexion.php");
		
		$objeto2 = new Conexion();
		$con2 = $objeto2->Conectar();
	
	
if ($con2) {
		$codigo_libro= $_POST ['codigo_libro'];
		$titulo= $_POST ['titulo'];
		$autor= $_POST ['autor'];
		$fecha_publicacion= $_POST ['fecha_publicacion'];
		$genero_literario= $_POST ['genero_literario'];
		$numero_paginas= $_POST ['numero_paginas'];
		$editorial= $_POST ['editorial'];
		$issn= $_POST ['issn'];
		$idioma= $_POST ['idioma'];
		$estado= $_POST ['estado'];
		$precio= $_POST ['precio'];
		$imagen_portada= $_POST ['imagen_portada'];


		$consulta="insert into libros values ('$codigo_libro','$titulo','$autor','$fecha_publicacion','$genero_literario','$numero_paginas','$editorial','$issn','$idioma','$estado','$precio', '$imagen_portada')";
		
		$resultado=pg_query($con2,$consulta);
		
		if ($resultado) {
			echo "Libro almacenado. <br />";
		}
		else {
			echo "error al guardar libro. <br />";
		}
		
		if (pg_close($con2)){ 
			echo "desconexion realizada. <br />";
		} 
		else {
			echo "error en la desconexión";
		}
}

?>
