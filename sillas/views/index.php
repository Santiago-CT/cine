<!DOCTYPE html>
<html>
<head>
    <title>Salas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Salas</h1>
        <a href="create.php" class="btn btn-primary">Agregar Sala</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Capacidad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($salas as $sala): ?>
                    <tr>
                        <td><?= $sala['id'] ?></td>
                        <td><?= $sala['nombre'] ?></td>
                        <td><?= $sala['capacidad'] ?></td>
                        <td>
                            <a href="/salas/show?id=<?= $sala['id'] ?>" class="btn btn-info">Ver</a>
                            <a href="/salas/edit?id=<?= $sala['id'] ?>" class="btn btn-warning">Editar</a>
                            <form action="/salas/delete" method="POST" style="display:inline;">
                                <input type="hidden" name="id" value="<?= $sala['id'] ?>">
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
