<?php
require_once '../CastPelicula.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['pelicula_id']) && isset($_POST['persona_id']) && isset($_POST['rol'])) {
        $pelicula_id = $_POST['pelicula_id'];
        $persona_id = $_POST['persona_id'];
        $rol = $_POST['rol'];
        $castPelicula = new CastPelicula();
        
        // Verificar si es una actualización o una creación
        if (!empty($_POST['id'])) {
            $id = $_POST['id'];
            $castPelicula->update($id, [
                'pelicula_id' => $pelicula_id,
                'persona_id' => $persona_id,
                'rol' => $rol
            ]);
        } else {
            $castPelicula->create([
                'pelicula_id' => $pelicula_id,
                'persona_id' => $persona_id,
                'rol' => $rol
            ]);
        }

        header('Location: ../cast_peliculas/index.php');
        exit();
    } else {
        echo "Por favor, complete todos los campos.";
    }
} else {
    echo "Método de solicitud no permitido.";
}
?>
