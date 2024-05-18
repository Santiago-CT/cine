
<!DOCTYPE html>
<html>
<head>
    <title>Detalles de la Reservación</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Detalles de la Reservación</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ID: <?php echo $reservacion['id']; ?></h5>
                <p class="card-text">Persona ID: <?php echo $reservacion['persona_id']; ?></p>
                <p class="card-text">Proyección ID: <?php echo $reservacion['proyeccion_id']; ?></p>
                <p class="card-text">Cantidad: <?php echo $reservacion['cantidad']; ?></p>
                <p class="card-text">Fecha Reserva: <?php echo $reservacion['fecha_reserva']; ?></p>
            </div>
        </div>
        <a href="/reservaciones" class="btn btn-secondary mt-3">Volver</a>
    </div>
</body>
</html>
