<?php

include ("conexion_bd.php");

// $objeto2 = new Conexion();
// $con2 = $objeto2->Conectar();

if (isset($_POST['crear_libro'])) {
	$codigo_libro = $_POST ['codigo_libro'];
	$titulo = $_POST ['titulo'];
	$autor = $_POST ['autor'];
	$fecha_publicacion = $_POST ['fecha_publicacion'];
	$genero_literario = $_POST ['genero_literario'];
	$numero_paginas = $_POST ['numero_paginas'];
	$editorial = $_POST ['editorial'];
	$issn = $_POST ['issn'];
	$idioma = $_POST ['idioma'];
	$estado = $_POST ['estado'];
	$precio = $_POST ['precio'];
	$imagen_portada = $_POST ['imagen_portada'];

	$consulta = "INSERT INTO libros VALUES ('$codigo_libro','$titulo','$autor','$fecha_publicacion','$genero_literario','$numero_paginas','$editorial','$issn','$idioma','$estado','$precio', '$imagen_portada')";
	
	$resultado=pg_query($conn,$consulta);
	
	if (!$resultado) {
		die("La consulta fallo!");
	}

	$_SESSION['message'] = 'Libro Guardado!';
	$_SESSION['message_type'] = 'success';
	header('Location: crear_librohtml.php');
}

?>
