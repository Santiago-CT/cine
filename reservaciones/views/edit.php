
<!DOCTYPE html>
<html>
<head>
    <title>Editar Reservación</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Editar Reservación</h1>
        <form action="/reservaciones/update/<?php echo $reservacion['id']; ?>" method="POST">
            <div class="form-group">
                <label for="persona_id">Persona ID:</label>
                <input type="number" name="persona_id" class="form-control" value="<?php echo $reservacion['persona_id']; ?>" required>
            </div>
            <div class="form-group">
                <label for="proyeccion_id">Proyección ID:</label>
                <input type="number" name="proyeccion_id" class="form-control" value="<?php echo $reservacion['proyeccion_id']; ?>" required>
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad:</label>
                <input type="number" name="cantidad" class="form-control" value="<?php echo $reservacion['cantidad']; ?>" required>
            </div>
            <div class="form-group">
                <label for="fecha_reserva">Fecha Reserva:</label>
                <input type="date" name="fecha_reserva" class="form-control" value="<?php echo $reservacion['fecha_reserva']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</body>
</html>
