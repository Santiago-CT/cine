<?php

require_once '../Pelicula.php';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        
        $reservar = new Pelicula();
        $reservar->getById($id);
        header('Location: ../views/reserva.php?id='.$id);
        exit();
    } else {
        die("ID de película no encontrado en el formulario POST.");
    }
} else {
    echo "Método de solicitud no permitido.";}
