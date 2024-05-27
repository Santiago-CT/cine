<?php
require_once '../Pelicula.php';
$pelicula = new Pelicula;
$peliculas = $pelicula->getAll();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Lista de Películas</title>
</head>
<body>
    <h1>Lista de Películas</h1>
    <a href="./create.php">Agregar Película</a>
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
                <a href="./show.php?php echo $pelicula['id']; ?>">Ver</a>
                <a href="./edit.php?php echo $pelicula['id']; ?>">Editar</a>
                <form action="../controller/delete.php" method="POST" style="display:inline;">
                            <input type="hidden" name="id" value="<?= $genero['id'] ?>">
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
