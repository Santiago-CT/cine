<?php
require './config/conexion.php';
session_start();
$nombre =$_POST['nombre'];
$capacidad = $_POST['capacidad'];

$query = "INSERT INTO salas (nombre,capacidad) VALUES ('$nombre', '$capacidad')";
if (pg_query($conexion, $query)) {
    
    header("location: ./sala/views/index.php");
    exit();
} else {
    // If there's an error, display an error message
    echo $rol.pg_last_error($conexion);
}

