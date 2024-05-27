<?php
require_once '../Sala.php';

echo '<pre>';
var_dump($_SERVER);
echo '</pre>';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['nombre']) && isset($_POST['capacidad'])) {
        $nombre = $_POST['nombre'];
        $capacidad = $_POST['capacidad'];
        $crear = new Sala();
        $crear->create($nombre, $capacidad);
        header('Location: ../salas/index.php');
        exit();
    } else {
        echo "Por favor, complete todos los campos.";
    }
} else {
    echo "Método de solicitud no permitido.";
}
?>
