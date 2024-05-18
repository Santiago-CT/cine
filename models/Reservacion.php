<?php

require_once 'config/config.php';

class Reservacion {
    private $pdo;

    public function __construct() {
        global $pdo;
        $this->pdo = $pdo;
    }

    public function getAll() {
        $stmt = $this->pdo->query('SELECT * FROM reservaciones');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->pdo->prepare('SELECT * FROM reservaciones WHERE id = :id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $stmt = $this->pdo->prepare('INSERT INTO reservaciones (persona_id, proyeccion_id, cantidad, fecha_reserva) VALUES (:persona_id, :proyeccion_id, :cantidad, :fecha_reserva)');
        return $stmt->execute($data);
    }

    public function update($id, $data) {
        $data['id'] = $id;
        $stmt = $this->pdo->prepare('UPDATE reservaciones SET persona_id = :persona_id, proyeccion_id = :proyeccion_id, cantidad = :cantidad, fecha_reserva = :fecha_reserva WHERE id = :id');
        return $stmt->execute($data);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare('DELETE FROM reservaciones WHERE id = :id');
        return $stmt->execute(['id' => $id]);
    }
}
?>
