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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="/">Cine Colombia</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/proyecciones">Proyecciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/reservaciones">Reservaciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/salas">Salas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/generos">Géneros</a>
                </li>
            </ul>
            <?php 
            if (isLoggedIn()) {
                echo '<a href="index.php?action=logout">Cerrar sesión</a>';
            } else {
                echo '<a href="index.php?action=login">Iniciar sesión</a>';
            } 
            ?>
        </div>
    </nav>