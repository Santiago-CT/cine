<?php
session_start();
echo 'entramos';
echo 'entramos';

if (isset($_GET['action'])) {
    echo 'Action is set: ' . $_GET['action'];
    if ($_GET['action'] == 'login') {
        echo 'Calling login function';
        login();
    } elseif ($_GET['action'] == 'logout') {
        echo 'Calling logout function';
        logout();
    }
}

function login() {
    require './config/conexion.php';
    
    // Obtener los datos del formulario
    $usuario = $_POST['user'];
    $clave = $_POST['pass'];

    // Depuración: Mostrar los valores obtenidos

    // Definir la consulta
    $query = "SELECT r.name as rol FROM personas p JOIN rol r ON r.id = p.rol_id WHERE p.email = $1 AND p.password = $2";
    $result = pg_query_params($conexion, $query, array($usuario, $clave));

    // Verificar si la consulta se ejecutó correctamente
    if ($result === false) {
        echo "Error en la consulta: " . pg_last_error($conexion);
        return;
    }
    // Verificar si se encontró un usuario con las credenciales proporcionadas
    if (pg_num_rows($result) > 0) {
        $fila = pg_fetch_assoc($result);
        $rol = $fila['rol'];

        // Establecer variables de sesión
        $_SESSION['nombreusuario'] = $usuario;
        $_SESSION['rol'] = $rol;
    
        // Redirigir al usuario a la página principal
        header('Location: index.php');
        exit();
    } else {
        session_destroy();
        echo "Datos incorrectos";
    }
}

function logout() {
    session_destroy();
    header('Location: index.php');
}


