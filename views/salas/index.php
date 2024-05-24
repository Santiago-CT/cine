<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Salas</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="my-4">Lista de Salas</h1>
        <a href="./create.php" class="btn btn-primary mb-3">Crear Nueva Sala</a>
        <table class="table">
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
                    <td><?php echo $sala['id']; ?></td>
                    <td><?php echo $sala['nombre']; ?></td>
                    <td><?php echo $sala['capacidad']; ?></td>
                    <td>
                        <a href="/salas/show/<?php echo $sala['id']; ?>" class="btn btn-info btn-sm">Ver</a>
                        <a href="/salas/edit/<?php echo $sala['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="/salas/delete/<?php echo $sala['id']; ?>" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
