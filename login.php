<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión - Cine Multiplex</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        .login-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .login-header h1 {
            margin: 0;
            font-size: 2em;
            color: #ff6600;
        }
        .login-header p {
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
    <div class="login-container">
        <div class="login-header">
            <h1>Cine Multiplex</h1>
            <p>¡Somos parte de tu alegría!</p>
        </div>
        <form action="./secciones.php?action=login" method="POST">
            <div class="form-group">
                <label for="username">Nombre de usuario *</label>
                <input type="text" name="user"  class="form-control" placeholder="Escriba su nombre de usuario en Cine Multiplex Villacentro." required>
            </div>
            <div class="form-group">
                <label for="password">Contraseña *</label>
                <input type="password" name="pass" class="form-control" placeholder="Escriba la contraseña asignada a su nombre de usuario." required>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Iniciar sesión</button>
            <div class="additional-links mt-3">
                <a href="./registro.php">Crear nueva cuenta</a><br>
                <a href="#">¿Ha olvidado su usuario?</a><br>
                <a href="#">¿Ha olvidado su contraseña?</a>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
