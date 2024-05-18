<!DOCTYPE html>
<html>
<head>
    <title>Lista de Películas</title>
</head>
<body>
    <h1>Lista de Películas</h1>
    <a href="/peliculas/create">Agregar Película</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Duración</th>
            <th>Fecha de Estreno</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($peliculas as $pelicula): ?>
        <tr>
            <td><?php echo $pelicula['id']; ?></td>
            <td><?php echo $pelicula['titulo']; ?></td>
            <td><?php echo $pelicula['duracion']; ?></td>
            <td><?php echo $pelicula['fecha_estreno']; ?></td>
            <td>
                <a href="/peliculas/show/<?php echo $pelicula['id']; ?>">Ver</a>
                <a href="/peliculas/edit/<?php echo $pelicula['id']; ?>">Editar</a>
                <a href="/peliculas/delete/<?php echo $pelicula['id']; ?>">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
