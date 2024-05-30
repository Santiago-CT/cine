<?php
require './config/conexion.php';  // Conexión a la base de datos

// Realizar la consulta para obtener los roles
$query = "SELECT id, name FROM rol";
$result = pg_query($conexion, $query);

// Manejar el caso en que la consulta falle
if (!$result) {
    echo "Error en la consulta de roles.";
    exit;
}

// Almacenar los roles en un arreglo
$roles = [];
while ($row = pg_fetch_assoc($result)) {
    $roles[] = $row;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Cuenta - Cine Multiplex</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .register-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        .register-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .register-header h1 {
            margin: 0;
            font-size: 2em;
            color: #ff6600;
        }
        .register-header p {
            margin: 0;
            color: #ff6600;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .btn-primary {
            background-color: #ff6600;
            border: none;
        }
        .btn-primary:hover {
            background-color: #e65a00;
        }
        .additional-links {
            text-align: center;
            margin-top: 15px;
        }
        .additional-links a {
            color: #ff6600;
            text-decoration: none;
        }
        .additional-links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="register-header">
            <h1>Cine Multiplex</h1>
            <p>¡Somos parte de tu alegría!</p>
        </div>
        <form action="./registrar.php" method="POST">
            
            <div class="form-group">
                <label for="name">Nombre *</label>
                <input type="text" name="nombre" class="form-control" placeholder="Escriba su nombre" required>
            </div>
            <div class="form-group">
                <label for="email">Correo electrónico *</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="Escriba su correo electrónico" required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña *</label>
                <input type="password" name="password"  class="form-control" placeholder="Escriba su contraseña" required>
            </div>
            <div class="form-group">
                <label for="role">Rol *</label>
                <select name="rol" id="rol" class="form-control" required>
                    <option value="1">Administrador</option>
                    <option value="2">Empleado</option>
                    <option value="3">Usuario</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Crear cuenta</button>
            <div class="additional-links mt-3">
                <a href="login.php">¿Ya tienes cuenta? Inicia sesión</a>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
