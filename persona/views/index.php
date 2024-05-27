
<!DOCTYPE html>
<html>
<head>
    <title>Lista de Personas</title>
</head>
<body>
    <h1>Lista de Personas</h1>
    <a href="/var/www/html/cine/views/personas/create.php">Agregar Persona</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Edad</th>
            <th>Correo</th>
            <th>Acciones</th>
        </tr>
        <?php foreach ($personas as $persona): ?>
        <tr>
            <td><?php echo $persona['id']; ?></td>
            <td><?php echo $persona['nombre']; ?></td>
            <td><?php echo $persona['edad']; ?></td>
            <td><?php echo $persona['correo']; ?></td>
            <td>
                <a href="/personas/show/<?php echo $persona['id']; ?>">Ver</a>
                <a href="/personas/edit/<?php echo $persona['id']; ?>">Editar</a>
                <a href="/personas/delete/<?php echo $persona['id']; ?>">Eliminar</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
