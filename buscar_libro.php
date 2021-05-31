<?php 

	include('conexion.php');

    $titulo = $_POST['titulo'];

    $consulta = "SELECT * FROM libros WHERE codigo_libro='$titulo' OR titulo='$titulo' OR autor='$titulo' OR fecha_publicacion='$titulo' OR genero_literario='$titulo' OR numero_paginas='$titulo' OR editorial='$titulo' OR idioma='$titulo' OR estado='$titulo'";

    $resultados = pg_query($conn,$consulta);

    $nr = pg_num_rows($resultados);

    if($nr==1)
    {
        echo"Libro encontrado!";
    }
    else if ($nr == 0)
    {
        echo"El libro no se encuentra!";
    }

    while ($resultado = pg_fetch_array($resultados)){

        echo $resultado['codigo_libro']." ".$resultado['titulo']." ".$resultado['autor']." ".$resultado['fecha_publicacion']." ".$resultado['genero_literario']." ".$resultado['numero_paginas']." ".$resultado['editorial']." ".$resultado['issn']." ".$resultado['idioma']." ".$resultado['estado']." ".$resultado['precio']." ".$resultado['imagen_portado'] . "<br/>";
    }

?>