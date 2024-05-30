<?php
session_start();

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
    
    echo 'llegamos hasta aqui33';

    $usuario = $_POST['user'];
    $clave = $_POST['pass'];
    $query = "SELECT r.name as rol FROM personas p JOIN rol r ON r.id = p.rol_id WHERE p.email = $1 AND p.password = $2";
    $result = pg_query_params($conexion, $query, array($usuario, $clave));

    // Verificar si la consulta se ejecutó correctamente
    if ($result === false) {
        echo "Error en la consulta: " . pg_last_error($conexion);
        return;
    }
    echo 'llegamos hasta aqui2';

    // Verificar si se encontró un usuario con las credenciales proporcionadas
    if (pg_num_rows($result) > 0) {
        $fila = pg_fetch_assoc($result);
        $rol = $fila['rol'];

        // Establecer variables de sesión
        $_SESSION['nombreusuario'] = $usuario;
        $_SESSION['rol'] = $rol;
        echo 'llegamos hasta aqui';
        echo '\n sESION:';
        var_dump($_SESSION);
        // Redirigir al usuario a la página principal
        header('Location: ./inde.php');
        exit();
    } else {
        session_destroy();
        echo "Datos incorrectos";
    }
}

function logout() {
    session_destroy();
    header('Location: ./inde.php');
}

?>
