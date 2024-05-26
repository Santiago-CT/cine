<?php

require_once 'config/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $rol_id = $_POST['rol_id'];

    
    $query = 'INSERT INTO personas (nombre, email, password, rol_id) VALUES (?, ?, ?, ?)';
    $stmt = $db->prepare($query);
    $stmt->execute([$nombre, $email, $password, $rol_id]);

    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Registro de Usuario</h1>
        <form method="POST" action="register.php">
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <div class="form-group">
                <label for="rol_id">Rol</label>
                <select class="form-control" id="rol_id" name="rol_id" required>
                    <option value="1">Administrador</option>
                    <option value="2">Empleado</option>
                    <option value="3">Cliente</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Registrarse</button>
        </form>
    </div>
</body>
</html>
