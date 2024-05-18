<!-- views/historial_peliculas/index.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Historial de Películas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Historial de Películas</h1>
        <a href="/historial_peliculas/create" class="btn btn-primary mb-4">Agregar Historial</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Película ID</th>
                    <th>Fecha</th>
                    <th>Evento</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($historiales as $historial): ?>
                <tr>
                    <td><?php echo $historial['id']; ?></td>
                    <td><?php echo $historial['pelicula_id']; ?></td>
                    <td><?php echo $historial['fecha']; ?></td>
                    <td><?php echo $historial['evento']; ?></td>
                    <td>
                        <a href="/historial_peliculas/show/<?php echo $historial['id']; ?>" class="btn btn-info btn-sm">Ver</a>
                        <a href="/historial_peliculas/edit/<?php echo $historial['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="/historial_peliculas/delete/<?php echo $historial['id']; ?>" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
