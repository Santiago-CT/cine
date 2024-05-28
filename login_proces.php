<?php
session_start();

require_once 'config.php'; // Include the config.php file

$conexion = new ConexionBD(); // Create a new instance of the ConexionBD class
$conn = $conexion->getConnection(); // Get the database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = :email"; // Use prepared statement
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        if (password_verify($password, $user['password'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['user_role'] = $user['role'];
            header("Location: index.php");
            exit();
        } else {
            echo '<script>alert("Contraseña incorrecta."); window.location.href="login.php";</script>';
        }
    } else {
        echo '<script>alert("Correo electrónico no encontrado."); window.location.href="login.php";</script>';
    }

    $conn = null; // Close the database connection
}
?>