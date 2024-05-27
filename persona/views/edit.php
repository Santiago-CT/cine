<!DOCTYPE html>
<html>
<head>
    <title>Editar Persona</title>
</head>
<body>
    <h1>Editar Persona</h1>
    <form action="/personas/update/<?php echo $persona['id']; ?>" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" value="<?php echo $persona['nombre']; ?>" required><br>

        <label for="edad">Edad:</label>
        <input type="number" name="edad" value="<?php echo $persona['edad']; ?>" required><br>

        <label for="correo">Correo:</label>
        <input type="email" name="correo" value="<?php echo $persona['correo']; ?>" required><br>

        <input type="submit" value="Guardar Cambios">
    </form>
</body>
</html>
