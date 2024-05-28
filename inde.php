<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cine Multiplex</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="bg-primary text-white text-center py-3">
        <div class="container">
            <h1>Cine Multiplex Villacentro</h1>
            <p>¡Somos parte de tu alegría!</p>
        </div>
    </header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Cine Multiplex</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link" href="#">Nosotros</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Tarifas</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Convenios</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Tarjeta Club</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="login.php">Iniciar Sesión</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="container my-4">
        <section class="filter mb-4">
            <form action="index.php" method="GET" class="form-inline justify-content-center">
                <div class="form-group mx-2">
                    <label for="pelicula" class="mr-2">Película:</label>
                    <select name="pelicula" id="pelicula" class="form-control">
                        <option value="">Todas</option>
                        <?php include 'data.php'; foreach ($movies as $movie): ?>
                            <option value="<?php echo $movie['title']; ?>"><?php echo $movie['title']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group mx-2">
                    <label for="fecha" class="mr-2">Fecha:</label>
                    <input type="date" name="fecha" id="fecha" class="form-control">
                </div>
                <div class="form-group mx-2">
                    <label for="hora" class="mr-2">Hora:</label>
                    <input type="time" name="hora" id="hora" class="form-control">
                </div>
                <button type="submit" class="btn btn-primary mx-2">Reservar</button>
            </form>
        </section>
        <section class="cartelera">
            <h2 class="text-center mb-4">En Cartelera</h2>
            <div class="row">
                <?php foreach ($movies as $movie): ?>
                    <div class="col-md-4 col-lg-3 mb-4">
                        <div class="card h-100">
                            <img src="<?php echo $movie['image']; ?>" class="card-img-top" alt="<?php echo $movie['title']; ?>">
                            <div class="card-body text-center">
                                <h5 class="card-title"><?php echo $movie['title']; ?></h5>
                                <p class="card-text"><?php echo $movie['format']; ?></p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </section>
    </main>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
