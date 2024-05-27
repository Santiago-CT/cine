<?php
require_once '../Genero.php';
$genero = new Genero;
$generos = $genero->getAll();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Lista de Géneros</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Lista de Géneros</h1>
        <a href="./create.php" class="btn btn-primary mb-4">Agregar Género</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($generos as $genero): ?>
                <tr>
                    <td><?php echo $genero['id']; ?></td>
                    <td><?php echo $genero['nombre']; ?></td>
                    <td>
                        <a href="./show.php?php echo $genero['id']; ?>" class="btn btn-info btn-sm">Ver</a>
                        <form action="../views/show.php" method="POST" style="display:inline;">
                            <input type="hidden" name="id" value="<?= $genero['id'] ?>">
                            <button type="submit" class="btn btn-info">Ver</button>
                        </form>
                        <a href="./edit.php?php echo $genero['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                        <form action="../controller /delete.php" method="POST" style="display:inline;">
                            <input type="hidden" name="id" value="<?= $genero['id'] ?>">
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
