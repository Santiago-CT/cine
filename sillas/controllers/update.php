<?php
require_once '../Silla.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id']) && isset($_POST['numero']) && isset($_POST['fila']) && isset($_POST['sala_id'])) {
        $id = $_POST['id'];
        $numero = $_POST['numero'];
        $fila = $_POST['fila'];
        $sala_id = $_POST['sala_id'];
        $silla = new Silla();
        
        // Verificar si es una actualización o una creación
        if (!empty($id)) {
            $silla->update($id, ['numero' => $numero, 'fila' => $fila, 'sala_id' => $sala_id]);
        } else {
            $silla->create(['numero' => $numero, 'fila' => $fila, 'sala_id' => $sala_id]);
        }

        header('Location: ../sillas/index.php');
        exit();
    } else {
        echo "Por favor, complete todos los campos.";
    }
} else {
    echo "Método de solicitud no permitido.";
}
?>
