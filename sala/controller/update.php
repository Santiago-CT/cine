<?php
require_once '../Sala.php';

echo '<pre>';
var_dump($_SERVER);
echo '</pre>';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id']) && isset($_POST['nombre']) && isset($_POST['capacidad'])) {
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $capacidad = $_POST['capacidad'];
        $actualizar = new Sala();
        $actualizar->update($id,$nombre,$capacidad);
        header('Location: ../salas/index.php');
        exit();
    } else {
        echo "Por favor, complete todos los campos.";
    }
} else {
    echo "Método de solicitud no permitido.";
}
?>
