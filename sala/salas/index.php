<?php
require_once '../Sala.php';
$sala = new Sala();
$salas = $sala->getAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salas</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../styles/index.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Cine Multiplex</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Tarifas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Convenios</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Tarjeta Club</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                    <?php
                    // Mostrar el estado de la sesión
                    if (isset($_SESSION['rol'])) {
                        echo '<li class="nav-item"><a class="nav-link" href="./secciones.php?action=logout">Cerrar Sesión</a></li>';
                    } else {
                        echo '<li class="nav-item"><a class="nav-link" href="login.php">Iniciar Sesión</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

    <section class="container">        
        <div class="mural" >
            
            <h1 class="my-4">Salas</h1>
            <a href="./create.php" class="btn btn-primary mb-3">Crear Sala</a>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Capacidad</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($salas as $sala): ?>
                        <tr>
                            <td><?= $sala['id'] ?></td>
                            <td><?= $sala['nombre'] ?></td>
                            <td><?= $sala['capacidad'] ?></td>
                            <td>
                                <a href="./show.php?id=<?= $sala['id'] ?>" class="btn btn-info">Ver</a>                                
                                    <a href="./edit.php?id=<?= $sala['id'] ?>" class="btn btn-warning">Editar</a>
                                    <form action="./controller/delete.php" method="POST" style="display:inline;">
                                        <input type="hidden" name="id" value="<?= $sala['id'] ?>">
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                            </td>
                        </tr>   
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>        
            
        </section>
    </body>
</html>
        