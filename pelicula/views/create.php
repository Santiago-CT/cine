<!DOCTYPE html>
<html>
<head>
    <title>Agregar Película</title>
</head>
<body>
    <h1>Agregar Película</h1>
    <form action="/peliculas/store" method="POST">
        <label for="titulo">Título:</label>
        <input type="text" name="titulo" required><br>

        <label for="duracion">Duración:</label>
        <input type="number" name="duracion" required><br>

        <label for="fecha_estreno">Fecha de Estreno:</label>
        <input type="date" name="fecha_estreno" required><br>

        <label for="genero_id">Género ID:</label>
        <input type="number" name="genero_id" required><br>

        <label for="director_id">Director ID:</label>
        <input type="number" name="director_id" required><br>

        <input type="submit" value="Guardar">
    </form>
</body>
</html>
