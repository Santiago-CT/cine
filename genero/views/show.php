<?php
require_once '../Genero.php';

echo '<pre>';
var_dump($_SERVER);
echo '</pre>';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];
        
        $obtener = new Genero();
        $obtener->getById($id);
        header('Location: ../views/index.php');
        exit();
    } else {
        echo "Por favor, complete todos los campos.";
    }
} else {
    echo "Método de solicitud no permitido.";
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Detalles del Género</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Detalles del Género</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ID: <?php echo $genero['id']; ?></h5>
                <p class="card-text">Nombre: <?php echo $genero['nombre']; ?></p>
            </div>
        </div>
        <a href="./index.php" class="btn btn-secondary mt-3">Volver</a>
    </div>
</body>
</html>
