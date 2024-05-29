<?php 
require '../views/templates/header.php';
require '../Pelicula.php';
$pelicula = new Pelicula();
$peliculas = $pelicula->getAll();
 ?>
<div class="row">
    <div class="col-12">
        <h2 class="text-center mb-4"><?php echo htmlspecialchars($pelicula['titulo']); ?></h2>
    </div>
</div>
<div class="row">
    <div class="col-md-4 text-center">
        <img src="<?php echo htmlspecialchars($pelicula['poster_url']); ?>" alt="<?php echo htmlspecialchars($pelicula['titulo']); ?>" class="img-fluid mb-3">
        <div>
            <a href="#" class="btn btn-primary btn-sm">Compartir en Facebook</a>
            <a href="#" class="btn btn-success btn-sm">Compartir en WhatsApp</a>
        </div>
    </div>
    <div class="col-md-8">
        <div class="embed-responsive embed-responsive-16by9 mb-4">
            <iframe class="embed-responsive-item" src="<?php echo htmlspecialchars($pelicula['trailer_url']); ?>" allowfullscreen></iframe>
        </div>
        <h5>Sinopsis:</h5>
        <p><?php echo nl2br(htmlspecialchars($pelicula['sinopsis'])); ?></p>
        <table class="table table-bordered">
            <tr>
                <th>Restricción</th>
                <td><?php echo htmlspecialchars($pelicula['restriccion']); ?></td>
            </tr>
            <tr>
                <th>Género</th>
                <td><?php echo htmlspecialchars($pelicula['genero']); ?></td>
            </tr>
            <tr>
                <th>Duración</th>
                <td><?php echo htmlspecialchars($pelicula['duracion']); ?> minutos</td>
            </tr>
            <tr>
                <th>Idioma</th>
                <td><?php echo htmlspecialchars($pelicula['idioma']); ?></td>
            </tr>
            <tr>
                <th>Director</th>
                <td><?php echo htmlspecialchars($pelicula['director']); ?></td>
            </tr>
            <tr>
                <th>Reparto</th>
                <td><?php echo nl2br(htmlspecialchars($pelicula['reparto'])); ?></td>
            </tr>
        </table>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-12">
        <h3>Compra en Línea</h3>
        <form action="procesar_reserva.php" method="post">
            <input type="hidden" name="pelicula_id" value="<?php echo htmlspecialchars($pelicula['id']); ?>">
            <div class="form-row align-items-end">
                <div class="form-group col-md-3">
                    <label for="fecha">Fecha</label>
                    <select id="fecha" name="fecha" class="form-control">
                        <option value="2024-06-06">Jueves 6 Junio</option>
                        <option value="2024-06-07">Viernes 7 Junio</option>
                        <option value="2024-06-08">Sábado 8 Junio</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="hora">Hora</label>
                    <select id="hora" name="hora" class="form-control">
                        <option value="14:20">02:20 pm</option>
                        <option value="16:30">04:30 pm</option>
                        <option value="19:00">07:00 pm</option>
                    </select>
                </div>
                <div class="form-group col-md-3">
                    <label for="cantidad">Cantidad</label>
                    <input type="number" id="cantidad" name="cantidad" class="form-control" min="1" max="10" value="1">
                </div>
            </div>
            <div class="mt-4">
                <h5>Selecciona tus asientos</h5>
                <div class="screen">PANTALLA</div>
                <div class="seat-row">
                    <!-- Asientos (ejemplo) -->
                    <div class="seat free"></div>
                    <div class="seat vip"></div>
                    <div class="seat occupied"></div>
                    <div class="seat selected"></div>
                    <!-- Agrega más asientos según sea necesario -->
                </div>
            </div>
            <div class="mt-4 text-center">
                <button type="submit" class="btn btn-primary">Reservar</button>
            </div>
        </form>
    </div>
</div>
<?php require '../templates/footer.php'; ?>
