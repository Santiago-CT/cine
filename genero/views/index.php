
<!DOCTYPE html>
<html>
<head>
    <title>Lista de Géneros</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Lista de Géneros</h1>
        <a href="/cine/views/generos/create.php" class="btn btn-primary mb-4">Agregar Género</a>
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
                        <a href="/generos/show/<?php echo $genero['id']; ?>" class="btn btn-info btn-sm">Ver</a>
                        <a href="/generos/edit/<?php echo $genero['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="/generos/delete/<?php echo $genero['id']; ?>" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>
