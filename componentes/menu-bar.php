<?php
    include('./componentes/session.php');
    // Manejar acciones de login y logout
    if (isset($_GET['action'])) {
    if ($_GET['action'] == 'login') {
        login();
    } elseif ($_GET['action'] == 'logout') {
        logout();
    }    
}
?>

<style>
    <?php include('../estilos/index.css'); ?>
</style>
<div class="slide-bar bg-dark">    
            <a href="index.php">Cine Colombia</a>
            <?php 
            if (isLoggedIn()) {
                echo '<a href="index.php?action=logout">Cerrar sesión</a>';
            } else {
                echo '<a href="index.php?action=login">Iniciar sesión</a>';
            } 
            ?>        
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