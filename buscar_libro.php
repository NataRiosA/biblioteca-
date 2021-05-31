<?php 

	include('conexion.php');
	$objeto = new Conexion();
	$conexion = $objeto->Conectar();

    $titulo = $_POST['titulo'];

    $consulta = "SELECT * FROM libros WHERE titulo = '$titulo'";

    $resultados = pg_query($conexion,$consulta);

    while ($resultado = pg_fetch_array($resultados)){

        echo $resultado['codigo_libro']." ".$resultado['titulo']." ".$resultado['autor']." ".$resultado['fecha_publicacion']." ".$resultado['genero_literario']." ".$resultado['numero_paginas']." ".$resultado['editorial']." ".$resultado['issn']." ".$resultado['idioma']." ".$resultado['estado']." ".$resultado['precio']." ".$resultado['imagen_portada'];
    }


	// $consulta = "SELECT * FROM libros";
 //    $resultado = $conexion->prepare($consulta);
 //    $resultado->execute();
 //    $datos = $resultado->fetchAll();

 //    var dump($datos); 

 //    foreach ($datos as dato) {
 //    	echo $dato['titulo']. "<br>";
 //    }

 ?>