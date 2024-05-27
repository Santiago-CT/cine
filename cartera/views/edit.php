
<!DOCTYPE html>
<html>
<head>
    <title>Editar Cartera</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Editar Cartera</h1>
        <form action="/carteras/update/<?php echo $cartera['id']; ?>" method="POST">
            <div class="form-group">
                <label for="saldo">Saldo:</label>
                <input type="number" name="saldo" class="form-control" value="<?php echo $cartera['saldo']; ?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
</body>
</html>
