<?php include('../secciones.php'); 
?>
<head>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="../styke.css" rel="stylesheet" >
</head>
<nav class="slide-bar bg-dark">
    <a href="index.php">Cine Multiplex </a>
    <a href="../views/proyecciones/index.php">Proyecciones</a>
    <a href="../views/reservaciones/index.php">Reservaciones</a>
    <a href="../sala/salas/index.php">Salas</a>
    <a href="../views/generos/index.php">Géneros</a>
    <?php
    // Mostrar el estado de la sesión
    if (isset($_SESSION['rol'])) {
        echo '<a href="../secciones.php?action=logout">Cerrar sesión</a>';
    } else {
        echo $_SESSION;
        var_dump($_SESSION);
        echo '<a href="../cine/login.php">Iniciar sesión</a>';
    }
    ?>

</nav>