<?php require '../views/templates/header.php'; 
require '../Pelicula.php';
$pelicula = new Pelicula;
$peliculas = $pelicula->getAll();

?>
<div class="row">
    <?php foreach ($peliculas as $pelicula): ?>
    <div class="col-md-4 mb-4">
        <div class="card">
            <img src="<?php echo htmlspecialchars($pelicula['poster_url']); ?>" class="card-img-top" alt="<?php echo htmlspecialchars($pelicula['titulo']); ?>">
            <div class="card-body">
                <h5 class="card-title"><?php echo htmlspecialchars($pelicula['titulo']); ?></h5>
                <form action="./reserva.php" method="post">
    <input type="hidden" name="id" value="<?php echo htmlspecialchars($pelicula['id']); ?>">
    <button type="submit" class="btn btn-primary">Reservar</button>
   
</form>

                </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>
<?php require '../views/templates/footer.php'; ?>
