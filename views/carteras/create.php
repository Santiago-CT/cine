
<!DOCTYPE html>
<html>
<head>
    <title>Agregar Cartera</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Agregar Cartera</h1>
        <form action="/carteras/store" method="POST">
            <div class="form-group">
                <label for="saldo">Saldo:</label>
                <input type="number" name="saldo" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</body>
</html>
