
<!DOCTYPE html>
<html>
<head>
    <title>Lista de Reservaciones</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .reservacion-card {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Lista de Reservaciones</h1>
        <a href="/reservaciones/create" class="btn btn-primary mb-4">Agregar Reservación</a>
        <div class="row">
            <?php foreach ($reservaciones as $reservacion): ?>
                <div class="col-md-4">
                    <div class="card reservacion-card">
                        <div class="card-body">
                            <h5 class="card-title">ID: <?php echo $reservacion['id']; ?></h5>
                            <p class="card-text">Persona ID: <?php echo $reservacion['persona_id']; ?></p>
                            <p class="card-text">Proyección ID: <?php echo $reservacion['proyeccion_id']; ?></p>
                            <p class="card-text">Cantidad: <?php echo $reservacion['cantidad']; ?></p>
                            <p class="card-text">Fecha Reserva: <?php echo $reservacion['fecha_reserva']; ?></p>
                            <a href="/reservaciones/show/<?php echo $reservacion['id']; ?>" class="btn btn-info btn-sm">Ver</a>
                            <a href="/reservaciones/edit/<?php echo $reservacion['id']; ?>" class="btn btn-warning btn-sm">Editar</a>
                            <a href="/reservaciones/delete/<?php echo $reservacion['id']; ?>" class="btn btn-danger btn-sm">Eliminar</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>
