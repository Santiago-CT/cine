
<!DOCTYPE html>
<html>
<head>
    <title>Agregar Persona</title>
</head>
<body>
    <h1>Agregar Persona</h1>
    <form action="/personas/store" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label for="edad">Edad:</label>
        <input type="number" name="edad" required><br>

        <label for="correo">Correo:</label>
        <input type="email" name="correo" required><br>

        <input type="submit" value="Guardar">
    </form>
</body>
</html>