<?php
require_once '../Persona.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['rol_id'])) {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $rol_id = $_POST['rol_id'];
        $persona = new Persona();
        
        // Verificar si es una actualización o una creación
        if (!empty($id)) {
            $persona->update($id, ['nombre' => $nombre, 'email' => $email, 'password' => $password, 'rol_id' => $rol_id]);
        } else {
            $persona->create(['nombre' => $nombre, 'email' => $email, 'password' => $password, 'rol_id' => $rol_id]);
        }

        header('Location: ../personas/index.php');
        exit();
    } else {
        echo "Por favor, complete todos los campos.";
    }
} else {
    echo "Método de solicitud no permitido.";
}
?>
