<!DOCTYPE html>
<html>
<head>
    <title>Lista de Carteras</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Lista de Carteras</h1>
        <a href="/carteras/create" class="btn btn-primary mb-4">Agregar Cartera</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Saldo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($carteras as $cartera): ?>
                <tr>
                    <td><?php echo $cartera['id']; ?></td>
                    <td><?php echo $cartera['saldo']; ?></td>
                    <td>
                        <a href="/carteras/show/<?php echo $cartera['id']; ?>" class="btn btn-info btn-sm">Ver</a>
                        <a href="/carteras/edit/<?php echo $cartera['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                        <a href="/carteras/delete/<?php echo $cartera['id']; ?>" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</body>
</html>