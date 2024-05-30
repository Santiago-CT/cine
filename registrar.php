<?php
require './config/conexion.php';

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];
$rol = $_POST['rol'];
echo 'nombre: '.$nombre. ' email: ' . $email.' password: ' . $password. ' rol: ' . $rol;
if (empty($nombre) || empty($email) || empty($password) || empty($rol)) {
    echo "Todos los campos son obligatorios.";
    exit();
}

$nombre = pg_escape_string($conexion, $nombre);
$email = pg_escape_string($conexion, $email);
$password = pg_escape_string($conexion, $password);
$rol = (int)$rol;

$query = "INSERT INTO personas (nombre, email, password, rol_id) VALUES ('$nombre', '$email', '$password', $rol)";
if (pg_query($conexion, $query)) {
    header("Location: login.php");
    exit();
} else {
    echo pg_last_error($conexion);
}
?>