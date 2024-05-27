<?php
require './config/conexion.php';

session_start();
$usuario =$_POST['user'];
$clave = $_POST['pass'];

$query = "SELECT * FROM personas WHERE email='$usuario' AND password = '$clave'";
$consulta = pg_query($conexion,$query);
$cantidad=pg_num_rows($consulta);
if($cantidad>0){
    $_SESSION['nombreusuario']=$usuario;
    header("location: index.php");
}else{
    echo "Datos incorrectos";
  
}
?>
