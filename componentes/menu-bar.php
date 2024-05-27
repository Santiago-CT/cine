<style>
    <?php include('../estilos/index.css'); ?>
</style>
<div class="slide-bar">
            <a href="index.php">Cine Colombia</a>
            <a href="./views/proyecciones/index.php">Proyecciones</a>
            <a href="./views/reservaciones/index.php">Reservaciones</a>
            <a href="./views/salas/index.php">Salas</a>
            <a href="./views/generos/index.php">Géneros</a>
            <?php
            // Mostrar el estado de la sesión
            if (isLoggedIn()) {
                echo '<a href="?action=logout">Cerrar sesión</a>';
            } else {
                echo '<a href="?action=login">Iniciar sesión</a>';
            }
            ?>
</div>