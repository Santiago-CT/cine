
<!DOCTYPE html>
<html>
<head>
    <title>Agregar Reservación</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Agregar Reservación</h1>
        <form action="/reservaciones/store" method="POST">
            <div class="form-group">
                <label for="persona_id">Persona ID:</label>
                <input type="number" name="persona_id" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="proyeccion_id">Proyección ID:</label>
                <input type="number" name="proyeccion_id" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad:</label>
                <input type="number" name="cantidad" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="fecha_reserva">Fecha Reserva:</label>
                <input type="date" name="fecha_reserva" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</body>
</html>
