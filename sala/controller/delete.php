<?php
require_once '../Sala.php';

echo '<pre>';
var_dump($_SERVER);
echo '</pre>';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        
        $eliminar = new Sala();
        $eliminar->delete($id);
        header('Location: ../salas/index.php');
        exit();
    } else {
        echo "Por favor, complete todos los campos.";
    }
} else {
    echo "Método de solicitud no permitido.";
}
?>
