<?php
require_once '../Genero.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id']) || isset($_POST['nombre'])) {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $genero = new Genero();
        if (!empty($id)) {
            $genero->update($id, ['nombre' => $nombre]);
        } else {
            $genero->create(['nombre' => $nombre]);
        }

        header('Location: ../views/index.php');
        exit();
    } else {
        echo "Por favor, complete todos los campos.";
    }
} else {
    echo "Método de solicitud no permitido.";
}
?>
