<?php
include('./secciones.php');
include '../cine/pelicula/Pelicula.php';

$data = new Pelicula();

$nombre_pelicula = isset($_POST['nombre_pelicula']) ? $_POST['nombre_pelicula'] : '';
$fecha_seleccionada = isset($_POST['fecha']) ? $_POST['fecha'] : '';
$hora_seleccionada = isset($_POST['hora']) ? $_POST['hora'] : '';
$mensaje_error = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!empty($nombre_pelicula) && !empty($fecha_seleccionada) && !empty($hora_seleccionada)) {
        header("Location: ./pelicula/views/index1.php");
        exit;
    } else {
        $mensaje_error = "Por favor, llene todos los campos antes de continuar.";
    }
}
$peliculas = $data->getAll();
$movies = $data->getVistaPP();
$peli = $data->getFecha($nombre_pelicula);


?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cine Multiplex</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styke.css">
</head>

<body>
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
                    <?php
                    // Mostrar el estado de la sesión
                    if (isset($_SESSION['rol'])) {
                        echo '<li class="nav-item"><a class="nav-link" href="./secciones.php?action=logout">Cerrar Sesión</a></li>';
                    } else {
                        echo '<li class="nav-item"><a class="nav-link" href="login.php">Iniciar Sesión</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <header class="bg-primary text-white text-center py-3">
        <div class="container">
            <h1>Cine Multiplex Villacentro</h1>
            <p>¡Somos parte de tu alegría!</p>
        </div>
    </header>
    <main class="container my-4">
        <section class="filter mb-4">
            <form action="" method="post" class="form-inline justify-content-center" id="reservationForm">
                <div class="form-group mx-2">
                    <label for="pelicula" class="mr-2">Película:</label>
                    <select name="nombre_pelicula" class="form-control" onchange="this.form.submit()">
                        <option value="" disabled selected>Seleccione una pelicula</option>
                        <?php
                        foreach ($movies as $movie) : ?>
                            <option value="<?php echo $movie['nombre_pelicula']; ?>" <?php echo ($movie['nombre_pelicula'] === $nombre_pelicula) ? 'selected' : ''; ?>><?php echo $movie['nombre_pelicula']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group mx-2">
                    <?php
                    $fechas_proyeccion = array();
                    foreach ($peli as $proyeccion) {
                        $fecha = $proyeccion['fecha_proyeccion'];
                        if (!in_array($fecha, $fechas_proyeccion)) {
                            $fechas_proyeccion[] = $fecha;
                        }
                    }
                    ?>
                    <label for="fecha" class="mr-2">Fecha:</label>
                    <select name="fecha" id="fecha" class="form-control">
                        <option value="" disabled selected>Seleccione una fecha</option>
                        <?php foreach ($fechas_proyeccion as $fecha) : ?>
                            <option value="<?php echo $fecha; ?>" <?php echo ($fecha === $fecha_seleccionada) ? 'selected' : ''; ?>><?php echo $fecha; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group mx-2">
                    <label for="hora" class="mr-2">Hora:</label>
                    <select name="hora" id="hora" class="form-control">
                        <option value="" disabled selected>Seleccione una hora</option>
                        <?php foreach ($peli as $proyeccion) : ?>
                            <option value="<?php echo $proyeccion['hora_proyeccion']; ?>" <?php echo ($proyeccion['hora_proyeccion'] === $hora_seleccionada) ? 'selected' : ''; ?>><?php echo $proyeccion['hora_proyeccion']; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Reservar</button>
            </form>
            <div id="errorMessage" class="alert alert-danger" style="display: none;"><?php echo $mensaje_error; ?></div>
        </section>
        <section class="cartelera">
            <h2 class="text-center mb-4">En Cartelera</h2>
            <div class="row" >
                <?php foreach ($peliculas as $movie) : ?>
                    <div class="col-md-4 col-lg-3 mb-4">
                        <div class="card h-100">
                            <img src="<?php echo $movie['poster_url']; ?>" class="card-img-top" alt="<?php echo $movie['titulo']; ?>">
                            <div class="card-body text-center">
                                <h5 class="card-title"><?php echo $movie['titulo']; ?></h5>
                                <p class="card
                                -text"><?php echo $movie['sinopsis']; ?></p>
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
    <script>
        document.getElementById('reservationForm').addEventListener('submit', function(event) {
            // Obtener los valores de los campos
            var pelicula = document.getElementsByName('nombre_pelicula')[0].value;
            var fecha = document.getElementById('fecha').value;
            var hora = document.getElementById('hora').value;

            // Verificar si todos los campos están llenos
            if (pelicula === '' || fecha === '' || hora === '') {
                // Mostrar el mensaje de error
                document.getElementById('errorMessage').style.display = 'block';
                // Detener el envío del formulario
                event.preventDefault();
            } else {
                // Ocultar el mensaje de error si todos los campos están llenos
                document.getElementById('errorMessage').style.display = 'none';
            }
        });
    </script>
</body>

</html>
