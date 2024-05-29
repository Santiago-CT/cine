<?php include('../secciones.php'); ?>
<nav class="slide-bar bg-dark">
    <a href="index.php">Cine Colombia</a>
    <a href="../views/proyecciones/index.php">Proyecciones</a>
    <a href="../views/reservaciones/index.php">Reservaciones</a>
    <a href="../sala/salas/index.php">Salas</a>
    <a href="../views/generos/index.php">Géneros</a>
    <?php
    // Mostrar el estado de la sesión
    if (isset($_SESSION['rol'])) {
        echo '<a href="../secciones.php?action=logout">Cerrar sesión</a>';
    } else {
        echo '<a href="../cine/login.php?action=login">Iniciar sesión</a>';
    }
    ?>
</nav>
