<?php
require_once '../Reservacion.php';

echo '<pre>';
var_dump($_SERVER);
echo '</pre>';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
if (isset($_POST['persona_id'])&& isset($_POST['proyeccion_id'])&& isset($_POST['cantidad']) && isset($_POST['fecha_reserva'])) {

        $persona_id=$_POST['persona_id']; ;
        $proyeccion_id = $_POST['proyeccion_id'];;
         $cantidad= $_POST['cantidad'];
         $fecha_reserva = $_POST['fecha_reserva'];;
        $crear = new Reservacion();
        $crear->create($persona_id, $proyeccion_id, $cantidad, $fecha_reserva);
        header('Location: ../views/index.php');
        exit();
    } else {
        echo "Por favor, complete todos los campos.";
    }
} else {
    echo "Método de solicitud no permitido.";
}
?>
