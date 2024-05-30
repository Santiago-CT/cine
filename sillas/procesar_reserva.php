<?php
session_start();
require '../config/config.php';

function verificarAsientosDisponibles($conn, $asientosSeleccionados) {
    $stmt = $conn->prepare("SELECT id FROM sillas WHERE id = ? AND ocupada = true");
    foreach ($asientosSeleccionados as $sillaId) {
        $stmt->execute([$sillaId]);
        if ($stmt->fetch()) {
            return false;
        }
    }
    return true;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'], $_POST['fecha'], $_POST['hora'], $_POST['selectedSeats'], $_SESSION['user_id'])) {
    $peliculaId = intval($_POST['id']);
    $fecha = $_POST['fecha'];
    $hora = $_POST['hora'];
    $selectedSeats = json_decode($_POST['selectedSeats'], true);
    $cantidad = intval($_POST['cantidad']);
    $personaId = intval($_SESSION['user_id']);
    
    if (empty($peliculaId) || empty($fecha) || empty($hora) || empty($selectedSeats) || $cantidad <= 0) {
        die("Por favor, complete todos los campos y seleccione al menos un asiento.");
    }

    $conexion = new ConexionBD();
    $conn = $conexion->getConnection();

    if (!verificarAsientosDisponibles($conn, $selectedSeats)) {
        die("Uno o más asientos seleccionados ya están ocupados. Por favor, elija otros asientos.");
    }

    $conn->beginTransaction();

    try {
        $fechaReserva = date('Y-m-d');
        foreach ($selectedSeats as $sillaId) {
            $stmt = $conn->prepare("INSERT INTO reservaciones (persona_id, proyeccion_id, silla_id, fecha_reserva, cantidad) VALUES (?, ?, ?, ?, ?)");
            $stmt->execute([$personaId, $peliculaId, $sillaId, $fechaReserva, $cantidad]);

            $stmt2 = $conn->prepare("UPDATE sillas SET ocupada = true WHERE id = ?");
            $stmt2->execute([$sillaId]);
        }

        $conn->commit();
        unset($_SESSION['selectedSeats']);
        header('Location: confirmacion_reserva.php');
        exit();

    } catch (Exception $e) {
        $conn->rollBack();
        die("Error al guardar la reserva: " . $e->getMessage());
    }
} else {
    die("Datos del formulario incompletos.");
}
?>
