<?php
require_once '../Pelicula.php';

echo '<pre>';
var_dump($_SERVER);
echo '</pre>';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        
        $reservar = new Pelicula();
        $reservar->getById($id);
        header('Location: ../views/reserva.php');
        exit();
    } else {
        die("Pelicula no encontrada");
    }
} else {
    echo "Método de solicitud no permitido.";
}
?>
