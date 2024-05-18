
<!DOCTYPE html>
<html>
<head>
    <title>Editar Película</title>
</head>
<body>
    <h1>Editar Película</h1>
    <form action="/peliculas/update/<?php echo $pelicula['id']; ?>" method="POST">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" value="<?php echo $pelicula['titulo']; ?>" required><br>

        <label for="duracion">Duración:</label>
