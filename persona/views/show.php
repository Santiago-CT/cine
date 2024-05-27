
<!DOCTYPE html>
<html>
<head>
    <title>Detalles de la Persona</title>
</head>
<body>
    <h1>Detalles de la Persona</h1>
    <ul>
        <li><strong>ID:</strong> <?php echo $persona['id']; ?></li>
        <li><strong>Nombre:</strong> <?php echo $persona['nombre']; ?></li>
        <li><strong>Edad:</strong> <?php echo $persona['edad']; ?></li>
        <li><strong>Correo:</strong> <?php echo $persona['correo']; ?></li>
    </ul>
    <a href="/personas">Volver a la Lista</a>
</body>
</html>
