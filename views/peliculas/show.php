<!DOCTYPE html>
<html>
<head>
    <title>Detalles de la Película</title>
</head>
<body>
    <h1>Detalles de la Película</h1>
    <ul>
        <li><strong>ID:</strong> <?php echo $pelicula['id']; ?></li>
        <li><strong>Título:</strong> <?php echo $pelicula['titulo']; ?></li>
        <li><strong>Duración:</strong> <?php echo $pelicula['duracion']; ?></li>
        <li><strong>Fecha de Estreno:</strong> <?php echo $pelicula['fecha_estreno']; ?></li>
        <li><strong>Género ID:</strong> <?php echo $pelicula['genero_id']; ?></li>
        <li><strong>Director ID:</strong> <?php echo $pelicula['director_id']; ?></li>
    </ul>
    <a href="/peliculas">Volver a la Lista</a>
</body>
</html>
