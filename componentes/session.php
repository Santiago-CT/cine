<?php
// session.php

// Iniciar la sesión
session_start();

// Inicializar la variable de sesión si no está ya establecida
if (!isset($_SESSION['loggedin'])) {
    $_SESSION['loggedin'] = false; // Valor inicial
}

// Funciones para manejar el estado de sesión
function isLoggedIn() {
    return $_SESSION['loggedin'];
}

function login() {
    $_SESSION['loggedin'] = true;
    header('Location: /cine/index.php');        
    exit();
}

function logout() {    
    $_SESSION['loggedin'] = false;
    // Redirigir al usuario a la página principal
    header('Location: /cine/index.php');        
    exit();
}
?>