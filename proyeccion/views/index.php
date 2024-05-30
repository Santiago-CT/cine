
<!DOCTYPE html>
<html>
<head>
    <title>Lista de Proyecciones</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .proyeccion {
            border: 1px solid #ddd;
            border-radius: 4px;
            padding: 15px;
            margin: 15px;
        }
        .proyeccion img {
            width: 100%;
            height: auto;
            border-radius: 4px;
        }
        .proyeccion .details {
            margin-top: 10px;
        }
        .bttn{
            block-size: auto;
            padding: 3px;
            box-shadow: 2px;
            top: 20px;
            left: 20px;
            margin-left: 20px;
            margin-top: 30px;
        }
        .section{
            height: 100%;
            width: 100%;
        }
    </style>
</head>
<body>
    <section>
        <a class="bttn" href="../../index.php">Volver</a>
        <div class="container">
            <h1 class="mt-4">Lista de Proyecciones</h1>
        <a href="./create.php" class="btn btn-primary mb-4">Agregar Proyección</a>
        <div class="row">
            <?php foreach ($proyecciones as $proyeccion): ?>
                <div class="col-md-4">
                    <div class="proyeccion">
                        <img src="https://via.placeholder.com/300x450" alt="Poster de la película">
                        <div class="details">
                            <h5>ID: <?php echo $proyeccion['id']; ?></h5>
                            <p>Película ID: <?php echo $proyeccion['pelicula_id']; ?></p>
                            <p>Sala ID: <?php echo $proyeccion['sala_id']; ?></p>
                            <p>Fecha: <?php echo $proyeccion['fecha']; ?></p>
                            <p>Hora: <?php echo $proyeccion['hora']; ?></p>
                            <a href="/proyecciones/show/<?php echo $proyeccion['id']; ?>" class="btn btn-info btn-sm">Ver</a>
                            <a href="/proyecciones/edit/<?php echo $proyeccion['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                            <a href="/proyecciones/delete/<?php echo $proyeccion['id']; ?>" class="btn btn-danger btn-sm">Eliminar</a>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
</body>
</html>
