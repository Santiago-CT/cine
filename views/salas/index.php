<!-- views/salas/index.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Lista de Salas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Lista de Salas</h1>
        <a href="/salas/create" class="btn btn-primary mb-4">Agregar Sala</a>
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
</body>
</html>
