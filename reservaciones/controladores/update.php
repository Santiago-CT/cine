<?php
require_once '../Reservacion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id']) && isset($_POST['persona_id']) && isset($_POST['proyeccion_id']) && isset($_POST['silla_id']) && isset($_POST['fecha_reservacion'])) {
        $id = $_POST['id'];
        $data = [
            'persona_id' => $_POST['persona_id'],
            'proyeccion_id' => $_POST['proyeccion_id'],
            'silla_id' => $_POST['silla_id'],
            'fecha_reservacion' => $_POST['fecha_reservacion']
        ];
        $reservacion = new Reservacion();
        
        // Verificar si es una actualización o una creación
        if (!empty($id)) {
            $reservacion->update($id, $data);
        } else {
            $reservacion->create($data);
        }

        header('Location: ../reservaciones/index.php');
        exit();
    } else {
        echo "Por favor, complete todos los campos.";
    }
} else {
    echo "Método de solicitud no permitido.";
}
?>
