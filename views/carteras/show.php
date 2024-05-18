
<!DOCTYPE html>
<html>
<head>
    <title>Detalles de la Cartera</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-4">Detalles de la Cartera</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">ID: <?php echo $cartera['id']; ?></h5>
                <p class="card-text">Saldo: <?php echo $cartera['saldo']; ?></p>
            </div>
        </div>
        <a href="/carteras" class="btn btn-secondary mt-3">Volver</a>
    </div>
</body>
</html>