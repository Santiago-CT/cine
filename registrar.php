<?php
require './config/conexion.php';

session_start();

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];
$rol = $_POST['rol'];
$query = "INSERT INTO personas (nombre, email, password,rol_id) VALUES ('$nombre', '$email', '$password',$rol)";
if (pg_query($conexion, $query)) {
    
    header("location: login.php");
    exit();
} else {
    // If there's an error, display an error message
    echo $rol.pg_last_error($conexion);
}
