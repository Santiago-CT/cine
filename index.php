<?php

require_once './config/conexion.php';
    
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cine Colombia</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <style>           
            <?php include('./estilos/index.css'); ?>
        </style>
    </head>
    <body>
        <section class="container-main">
            <?php   
               //require_once ('./componentes/menu-bar.php');
            ?>
            
            <div class=" text-center bg text-white p-4">
                <h1 class="display-4">Bienvenido a Cine Colombia Villavicencio</h1>
                <p class="lead">Gestión de películas, salas, reservaciones y más.</p>
                <a class="btn btn-primary btn-lg" href="./reservaciones/views/create.php" role="button">Hacer una Reservación</a>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Proyecciones</h5>
                                <p class="card-text">Consulta y gestiona las proyecciones de las películas, incluyendo el reparto.</p>
                                <a href="./proyeccion/views/index.php" class="btn btn-primary">Ver Proyecciones</a>
                                <?php if (isset($_SESSION['rol']) && $_SESSION['rol'] !== 'cliente'): ?>
                                    <a href="./proyeccion/views/create.php" class="btn btn-secondary">Agregar Proyección</a>
                                <?php endif; ?>
                            
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Reservaciones</h5>
                                <p class="card-text">Consulta y gestiona las reservaciones de entradas.</p>
                                <a href="./reservaciones/views/index.php" class="btn btn-primary">Ver Reservaciones</a>
                                <?php if (isset($_SESSION['rol']) && $_SESSION['rol'] !== 'cliente'): ?>
                                    <a href="./proyeccion/views/create.php" class="btn btn-secondary">Agregar Proyección</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Salas</h5>
                                <p class="card-text">Consulta y gestiona la información de las salas.</p>
                                <a href="./sala/salas/index.php" class="btn btn-primary">Ver Salas</a>
                                <?php if (isset($_SESSION['rol']) && $_SESSION['rol'] !== 'cliente'): ?>
                                    <a href="./proyeccion/views/create.php" class="btn btn-secondary">Agregar Proyección</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <div class="card-body">
                                <h5 class="card-title">Géneros</h5>
                                <p class="card-text">Consulta y gestiona los géneros de las películas.</p>
                                <a href="./genero/views/index.php" class="btn btn-primary">Ver Géneros</a>
                                <?php if (isset($_SESSION['rol']) && $_SESSION['rol'] !== 'cliente'): ?>                                  
                                    <a href="./genero/views/create.php" class="btn btn-secondary">Agregar Género</a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
                <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
                <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>    
                <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        </body>
    </html>
            
       
