
<!DOCTYPE html>
<html>
<head>
    <title>Lista de Cast de Películas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Lista de Cast de Películas</h1>
        <a href="/cast_peliculas/create" class="btn btn-primary mb-4">Agregar Cast</a>
        <a href="/cast_peliculas/show" class="btn btn-primary mb-4">Agregar Cast</a>
        <a href="/cast_peliculas/edit" class="btn btn-primary mb-4">Agregar Cast</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Película ID</th>
                    <th>Actor ID</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cast as $c): ?>
                <tr>
                    <td><?php echo $c['id']; ?></td>
                    <td><?php echo $c['pelicula_id']; ?></td>
                    <td><?php echo $c['actor_id']; ?></td>
                    <td><?php echo $c['rol']; ?></td>
                    <td>
                        <a href="/cast_peliculas/show/<?php echo $c['id']; ?>" class="btn btn-info btn-sm">Ver</a>
                        <a href="/cast_peliculas/edit/<?php echo $c['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="/cast_peliculas/delete/<?php echo $c['id']; ?>" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
