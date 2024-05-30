<?php
require '../views/templates/header.php';
require '../Pelicula.php';
$nombre_pelicula = isset($_POST['nombre_pelicula']) ? $_POST['nombre_pelicula'] : '';
$fecha_seleccionada = isset($_POST['fecha']) ? $_POST['fecha'] : '';
$hora_seleccionada = isset($_POST['hora']) ? $_POST['hora'] : '';
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $pelicula = new Pelicula();
    $data = $pelicula->getById($id);
    $d=$pelicula->getFecha($data['titulo']);
 
} else {
    die("ID de película no encontrado en la URL.");
}

// Verifica si la clave "reparto" existe en el array $data
$reparto = isset($data['reparto']) ? $data['reparto'] : 'N/A';

// Recuperar asientos seleccionados de la sesión
session_start();
$selectedSeats = $_SESSION['selectedSeats'] ?? [];


?>


<div class="row">
    <div class="col-12">
        <h2 class="text-center mb-4"><?php echo htmlspecialchars($data['titulo']); ?></h2>
    </div>
</div>
<div class="row">
    <div class="col-md-4 text-center">
        <img src="<?php echo htmlspecialchars($data['poster_url']); ?>" alt="<?php echo htmlspecialchars($data['titulo']); ?>" class="img-fluid mb-3">
        <div>
            <a href="#" class="btn btn-primary btn-sm">Compartir en Facebook</a>
            <a href="#" class="btn btn-success btn-sm">Compartir en WhatsApp</a>
        </div>
    </div>
    <div class="col-md-8">
        <div class="embed-responsive embed-responsive-16by9 mb-4">
            <iframe class="embed-responsive-item" src="<?php echo htmlspecialchars($data['trailer_url']); ?>" allowfullscreen></iframe>
        </div>
        <h5>Sinopsis:</h5>
        <p><?php echo nl2br(htmlspecialchars($data['sinopsis'])); ?></p>
        <table class="table table-bordered">
            <tr>
                <th>Restricción</th>
                <td><?php echo htmlspecialchars($data['restriccion']); ?></td>
            </tr>
            <tr>
                <th>Género</th>
                <td><?php echo htmlspecialchars($data['genero']); ?></td>
            </tr>
            <tr>
                <th>Duración</th>
                <td><?php echo htmlspecialchars($data['duracion']); ?> minutos</td>
            </tr>
            <tr>
                <th>Idioma</th>
                <td><?php echo htmlspecialchars($data['idioma']); ?></td>
            </tr>
            <tr>
                <th>Director</th>
                <td><?php echo htmlspecialchars($data['director']); ?></td>
            </tr>
            <tr>
                <th>Reparto</th>
                <td><?php echo nl2br(htmlspecialchars($reparto)); ?></td>
            </tr>
        </table>
    </div>
</div>
<hr>
<div class="row">
    <div class="col-12">
        <h3>Compra en Línea</h3>
        <form action="/cine/sillas/procesar_reserva.php" method="post">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($data['id']); ?>">
            <div class="form-row align-items-end">
            <div class="form-group mx-2">
                 
                    <label for="fecha" class="mr-2">Fecha:</label>
                    <select name="fecha" id="fecha" class="form-control">
                        <option value="" disabled selected>Seleccione una fecha</option>
                        <?php foreach ($d as $fecha) : ?>
                            <option value="<?php echo $fecha; ?>" <?php echo ($fecha === $fecha_seleccionada) ? 'selected' : ''; ?>><?php echo $fecha; ?></option>
                        <?php endforeach; ?>
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

            <!-- Sección de selección de asientos -->
            <h4>Selecciona tus Asientos</h4>
            <div class="screen"></div>
            <?php for ($i = 1; $i <= 8; $i++): ?>
                <div class="row">
                    <?php for ($j = 1; $j <= 9; $j++): 
                        $seatNumber = ($i - 1) * 5 + $j;
                    ?>
                        <button type="submit" name="seat" value="<?php echo $seatNumber; ?>" class="seat <?php echo in_array($seatNumber, $selectedSeats) ? 'selected' : ''; ?>"></button>
                    <?php endfor; ?>
                </div>
            <?php endfor; ?>

            <input type="hidden" name="selectedSeats" value="<?php echo htmlspecialchars(json_encode($selectedSeats)); ?>">
            <button type="submit" class="btn btn-primary mt-4">Reservar</button>
        </form>
    </div>
</div>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const form = document.querySelector("form");
    form.addEventListener("submit", function(event) {
        const fecha = document.getElementById("fecha").value;
        const hora = document.getElementById("hora").value;
        const cantidad = document.getElementById("cantidad").value;
        const selectedSeats = document.querySelectorAll(".seat.selected").length;

        if (!fecha || !hora || cantidad <= 0 || selectedSeats === 0) {
            alert("Por favor, complete todos los campos y seleccione al menos un asiento.");
            event.preventDefault();
        }
    });

    document.querySelectorAll(".seat").forEach(seat => {
        seat.addEventListener("click", function(event) {
            event.preventDefault();
            this.classList.toggle("selected");
            updateSelectedSeats();
        });
    });

    function updateSelectedSeats() {
        const selectedSeats = [...document.querySelectorAll(".seat.selected")].map(seat => seat.value);
        document.querySelector("input[name='selectedSeats']").value = JSON.stringify(selectedSeats);
    }
});
</script>


<?php require '../views/templates/footer.php'; ?>

<!-- Añade el CSS para hacer las sillas más grandes -->
<style>
    .seat {
        width: 50px; /* Aumenta el tamaño del ancho */
        height: 50px; /* Aumenta el tamaño de la altura */
        margin: 5px;
        background-color: #ddd;
        border: 1px solid #999;
        border-radius: 5px;
    }
    .seat.selected {
        background-color: #6c757d; /* Color para los asientos seleccionados */
    }
    .seat:hover {
        cursor: pointer;
        background-color: #ffc107; /* Color al pasar el cursor sobre el asiento */
    }
    .screen {
        background-color: #333;
        height: 50px;
        margin: 20px 0;
        border-radius: 5px;
    }
    .row {
        display: flex;
        justify-content: center;
    }
</style>
