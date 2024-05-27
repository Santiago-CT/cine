<?php
require_once '../HistorialPelicula.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id']) && isset($_POST['pelicula_id']) && isset($_POST['fecha']) && isset($_POST['accion'])) {
        $id = $_POST['id'];
        $pelicula_id = $_POST['pelicula_id'];
        $fecha = $_POST['fecha'];
        $accion = $_POST['accion'];
        $historialPelicula = new HistorialPelicula();
        
        // Verificar si es una actualización o una creación
        if (!empty($id)) {
            $historialPelicula->update($id, ['pelicula_id' => $pelicula_id, 'fecha' => $fecha, 'accion' => $accion]);
        } else {
            $historialPelicula->create(['pelicula_id' => $pelicula_id, 'fecha' => $fecha, 'accion' => $accion]);
        }

        header('Location: ../historial_peliculas/index.php');
        exit();
    } else {
        echo "Por favor, complete todos los campos.";
    }
} else {
    echo "Método de solicitud no permitido.";
}
?>
