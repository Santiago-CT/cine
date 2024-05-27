<?php
    include('../componentes/session.php');
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
<nav class="slide-bar bg-dark">    
            <a href="index.php">Cine Colombia</a>                
            <a href="../proyeccion/views/index.php">Proyecciones</a>
            <a href="../reservaciones/views/index.php">Reservaciones</a>
            <a href="../sala/salas/index.php">Salas</a>
            <a href="../genero/views/index.php">Géneros</a>
            <?php
            // Mostrar el estado de la sesión
            if (isLoggedIn()) {
                echo '<a href="?action=logout">Cerrar sesión</a>';
            } else {
                echo '<a href="../cine/login.php"> Iniciar sesión</a>';
            }
            ?>
</nav>