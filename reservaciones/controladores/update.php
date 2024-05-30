<?php
require_once '../Reservacion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id']) || isset($_POST['persona_id']) || isset($_POST['proyeccion_id']) || isset($_POST['silla_id']) || isset($_POST['fecha_reservacion'])) {
        $id = $_POST['id'];
        $persona_id= $_POST['persona_id'];
        $silla_id =$_POST['silla_id']; 
        $proyeccion_id= $_POST['proyeccion_id'];
        $fecha_reservacion =$_POST['fecha_reservacion']; 
        $cantidad =$_POST['cantidad']; ;
        $reservacion = new Reservacion();

        if (!empty($id)) {
            $reservacion->update($id, $persona_id, $proyeccion_id,$silla_id,$fecha_reservacion,$cantidad);

        } else {
            $reservacion->create($persona_id, $proyeccion_id,$silla_id,$fecha_reservacion,$cantidad);
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
