<?php
require_once '../Pelicula.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id']) && isset($_POST['titulo']) && isset($_POST['genero_id']) && isset($_POST['director']) && isset($_POST['fecha_estreno'])) {
        $id = $_POST['id'];
        $titulo = $_POST['titulo'];
        $genero_id = $_POST['genero_id'];
        $director = $_POST['director'];
        $fecha_estreno = $_POST['fecha_estreno'];
        $pelicula = new Pelicula();
        
        // Verificar si es una actualización o una creación
        if (!empty($id)) {
            $pelicula->update($id, ['titulo' => $titulo, 'genero_id' => $genero_id, 'director' => $director, 'fecha_estreno' => $fecha_estreno]);
        } else {
            $pelicula->create(['titulo' => $titulo, 'genero_id' => $genero_id, 'director' => $director, 'fecha_estreno' => $fecha_estreno]);
        }

        header('Location: ../peliculas/index.php');
        exit();
    } else {
        echo "Por favor, complete todos los campos.";
    }
} else {
    echo "Método de solicitud no permitido.";
}
?>
