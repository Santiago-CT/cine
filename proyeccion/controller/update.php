<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../Proyeccion.php';
echo 'aqui 1';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    echo 'aqui ';

    if (isset($_POST['pelicula_id']) && isset($_POST['sala_id']) && isset($_POST['fecha']) && isset($_POST['hora'])) {
        echo 'aqui 2';
        $id = $_POST['id'];
        $pelicula_id = $_POST['pelicula_id'];
        $sala_id = $_POST['sala_id'];
        $fecha = $_POST['fecha'];
        $hora = $_POST['hora'];
        $proyeccion = new Proyeccion();
        echo 'aqui update';
        $data = ['pelicula_id' => $pelicula_id, 'sala_id' => $sala_id, 'fecha' => $fecha, 'hora' => $hora];
        var_dump($data);
        if (!empty($id)) {
            echo 'update';
            $proyeccion->update($id, $data);
        } else {
            echo 'create';
            $proyeccion->create($data);
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
