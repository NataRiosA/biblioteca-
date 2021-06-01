<?php include ("conexion_bd.php"); ?>
    
<!DOCTYPE html>

<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>EsBook</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="eCommerce HTML Template Free Download" name="keywords">
        <meta content="eCommerce HTML Template Free Download" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400|Source+Code+Pro:700,900&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
        <!-- FONT AWESOEM -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        <!-- Top bar Start -->
        <div class="top-bar">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <i class="fa fa-envelope"></i>
                        freemind@email.com
                    </div>
                    <div class="col-sm-6">
                        <i class="fa fa-phone-alt"></i>
                        +57 3108923641
                    </div>
                </div>
            </div>
        </div>
        <!-- Top bar End -->
        
        <!-- Nav Bar Start -->
        <div class="nav">
            <div class="container-fluid">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto">
                            <a href="inicio.html" class="nav-item nav-link">Inicio</a>
                            <a href="product-list.html" class="nav-item nav-link">Libros</a>
                            <a href="cart.html" class="nav-item nav-link">Carrito de compras</a>
                            <a href="checkout.html" class="nav-item nav-link">Pago</a>
                            <a href="my-account.html" class="nav-item nav-link">Mi cuenta</a>
                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Mas paginas</a>
                                <div class="dropdown-menu">
                                    <a href="buscar_libro.html" class="dropdown-item">Buscar Libros</a>
                                    <a href="crear_librohtml.php" class="dropdown-item">Crear Libro</a>                                    
                                    <a href="login.html" class="dropdown-item">Iniciar sesión & Registrarse</a>
                                    <!-- <a href="contact.html" class="dropdown-item">Contactenos</a> -->
                                </div>
                            </div>
                        </div>
                        <div class="navbar-nav ml-auto">
                            <div class="nav-item dropdown">
                                <!-- <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Mi cuenta</a> -->
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Iniciar sesión</a>
                                    <a href="#" class="dropdown-item">Registrarse</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <!-- Nav Bar End -->      
        
        <!-- Bottom Bar Start -->
        <div class="bottom-bar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="index.html">
                                <img src="img/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!-- <div class="search">
                            <input type="text" placeholder="Search">
                            <button><i class="fa fa-search"></i></button>
                        </div> -->
                    </div>
                    <div class="col-md-3">
                        <div class="user">
                            <a href="buscar_libro.html" class="btn wishlist">
                                <i class="fa fa-heart"></i>
                                <span>(0)</span>
                            </a>
                            <a href="cart.html" class="btn cart">
                                <i class="fa fa-shopping-cart"></i>
                                <span>(0)</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bottom Bar End --> 
        
        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap">
            <div class="container-fluid">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                    <li class="breadcrumb-item"><a href="#">Mas páginas</a></li>
                    <li class="breadcrumb-item active">Crear Libro</li>
                </ul>
            </div>
        </div>
        <!-- Breadcrumb End -->
        
        <!-- Login Start -->
        <div class="login">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-6">

                        <?php if (isset($_SESSION['message'])) { ?>
                        <div class="alert alert-<?= $_SESSION['message_type']?> alert-dismissible fade show" role="alert">
                            <?= $_SESSION['message']?>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <?php session_unset(); } ?>

                        <div class="register-form">                                
                            <div class="row">
                                <div class="col-md-6">
                                <form action="crear_libro.php" method="POST">
                                    <label>Codigo de libro</label>
                                    <input class="form-control" type="text" name= "codigo_libro" placeholder="Codigo de libro">
                                </div>
                                <div class="col-md-6">
                                    <label>Titulo </label>
                                    <input class="form-control" type="text" name= "titulo" placeholder="Titulo">
                                </div>
                                <div class="col-md-6">
                                    <label>Autor</label>
                                    <input class="form-control" type="text" name= "autor" placeholder="Autor">
                                </div>
                                <div class="col-md-6">
                                    <label>Fecha de publicación</label>
                                    <input class="form-control" type="text" name= "fecha_publicacion" placeholder="Fecha de publicación">
                                </div>
                                <div class="col-md-6">
                                    <label>Género literario</label>
                                    <input class="form-control" type="text" name= "genero_literario" placeholder="Género literario">
                                </div>
                                <div class="col-md-6">
                                    <label>Numero de paginas</label>
                                    <input class="form-control" type="text" name= "numero_paginas" placeholder="Numero de paginas">
                                </div>
                                <div class="col-md-6">
                                    <label>Editorial</label>
                                    <input class="form-control" type="text" name= "editorial" placeholder="Editorial">
                                </div>
                                <div class="col-md-6">
                                    <label>ISSN</label>
                                    <input class="form-control" type="text" name= "issn" placeholder="ISSN">
                                </div>
                                <div class="col-md-6">
                                    <label>Idioma</label>
                                    <input class="form-control" type="text" name= "idioma" placeholder="Idioma">
                                </div>
                                <div class="col-md-6">
                                    <label>Estado</label>
                                    <input class="form-control" type="text" name= "estado" placeholder="Estado">
                                </div>                                
                                <div class="col-md-6">
                                    <label>Precio</label>
                                    <input class="form-control" type="text" name= "precio" placeholder="Precio">
                                </div>
                                <div class="col-md-6">
                                    <label>Link Imagen portada</label>
                                    <input class="form-control" type="text" name= "imagen_portada" placeholder="Link Imagen portada">
                                </div>

                                <div class="col-md-12">
                                    <input type="submit" name="crear_libro" class="btn btn-success btn-block" value="Crear Libro">
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- Login End -->
        
        <!-- Footer Start -->
        <div class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Contacto</h2>
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>Pereira-Risaralda</p>
                                <p><i class="fa fa-envelope"></i>freemind@gmail.com</p>
                                <p><i class="fa fa-phone"></i>+57 3108923641</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Siguenos</h2>
                            <div class="contact-info">
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="footer-widget">
                            <h2>Informacion</h2>
                            <ul>
                                <li><a href="#">Acerca de nosotros</a></li>
                                <li><a href="#">Politica de privacidad</a></li>
                                <li><a href="#">Terminos y condiciones</a></li>
                            </ul>
                        </div>
                    </div>

                    
                </div>
                
                <div class="row payment align-items-center">
                    <div class="col-md-6">
                        <div class="payment-method">
                            <h2>Aceptamos</h2>
                            <img src="img/payment-method.png" alt="Payment Method" />
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- Footer End -->
        
        <!-- Footer Bottom Start -->
        <div class="footer-bottom">
            <div class="container">
                <div class="row">

                </div>
            </div>
        </div>
        <!-- Footer Bottom End -->        
        
        <!-- Back to Top -->
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        
        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>