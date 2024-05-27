<?php
require_once '../Venta.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id']) && isset($_POST['monto']) && isset($_POST['fecha'])) {
        $id = $_POST['id'];
        $monto = $_POST['monto'];
        $fecha = $_POST['fecha'];
        $venta = new Venta();
        
        // Verificar si es una actualización o una creación
        if (!empty($id)) {
            $venta->update($id, ['monto' => $monto, 'fecha' => $fecha]);
        } else {
            $venta->create(['monto' => $monto, 'fecha' => $fecha]);
        }

        header('Location: ../ventas/index.php');
        exit();
    } else {
        echo "Por favor, complete todos los campos.";
    }
} else {
    echo "Método de solicitud no permitido.";
}
?>
