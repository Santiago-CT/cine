<?php
require_once '../Cartera.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id']) && isset($_POST['saldo']) && isset($_POST['fecha'])) {
        $id = $_POST['id'];
        $saldo = $_POST['saldo'];
        $fecha = $_POST['fecha'];
        $cartera = new Cartera();
        
        // Verificar si es una actualización o una creación
        if (!empty($id)) {
            $cartera->update($id, ['saldo' => $saldo, 'fecha' => $fecha]);
        } else {
            $cartera->create(['saldo' => $saldo, 'fecha' => $fecha]);
        }

        header('Location: ../carteras/index.php');
        exit();
    } else {
        echo "Por favor, complete todos los campos.";
    }
} else {
    echo "Método de solicitud no permitido.";
}
?>
