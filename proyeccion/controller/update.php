<?php
require_once '../Proyeccion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id']) || isset($_POST['pelicula_id']) || isset($_POST['sala_id']) || isset($_POST['fecha']) || isset($_POST['hora'])) {
        $id = $_POST['id'];
        $pelicula_id = $_POST['pelicula_id'];
        $sala_id = $_POST['sala_id'];
        $fecha = $_POST['fecha'];
        $hora = $_POST['hora'];
        $proyeccion = new Proyeccion();

        // Verificar si es una actualización o una creación
        if (!empty($id)) {
            $proyeccion->update($id, ['pelicula_id' => $pelicula_id, 'sala_id' => $sala_id, 'fecha' => $fecha, 'hora' => $hora]);
        } else {
            $proyeccion->create(['pelicula_id' => $pelicula_id, 'sala_id' => $sala_id, 'fecha' => $fecha, 'hora' => $hora]);
        }

        header('Location: ../proyeccion/views/index.php');
        exit();
    } else {
        echo "Por favor, complete todos los campos.";
    }
} else {
    echo "Método de solicitud no permitido.";
}
?>
