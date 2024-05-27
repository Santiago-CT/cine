<?php
require_once '../Proyeccion.php';

echo '<pre>';
var_dump($_SERVER);
echo '</pre>';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        
        $eliminar = new Proyeccion();
        $eliminar->delete($id);
        header('Location: ../views/index.php');
        exit();
    } else {
        echo "Por favor, complete todos los campos.";
    }
} else {
    echo "Método de solicitud no permitido.";
}
?>
