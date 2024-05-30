<?php
require_once '../Pelicula.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id']) || isset($_POST['titulo']) || isset($_POST['genero_id']) || isset($_POST['director']) || isset($_POST['fecha_estreno'])) {
        $id = $_POST['id'];
        $titulo = $_POST['titulo'];
        $genero_id = $_POST['genero_id'];
        $director = $_POST['director'];
        $fecha_estreno = $_POST['fecha_estreno'];
        $pelicula = new Pelicula();
        

        if (!empty($id)) {
            $pelicula->update($id, $titulo,$duracion,$fecha_estreno,$director,$sinopsis,$genero,$restriccion,$idioma,$poster_url,$trailer_url);
        } else {
            $pelicula->create($id, $titulo,$duracion,$fecha_estreno,$director,$sinopsis,$genero,$restriccion,$idioma,$poster_url,$trailer_url);
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
