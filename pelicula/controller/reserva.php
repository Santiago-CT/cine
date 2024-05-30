<?php

require_once '../Pelicula.php';

echo '<pre>';
var_dump($_SERVER);
echo '</pre>';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    header('Location: ../views/reserva.php?id='.$id);
    exit();
} else {
    die("ID de película no encontrado en la URL NO.");
}

