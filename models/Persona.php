<?php

require_once 'config/config.php';

class Persona {
    private $pdo;

    public function __construct() {
        global $pdo;
        $this->pdo = $pdo;
    }

    public function getAll() {
        $stmt = $this->pdo->query('SELECT * FROM personas');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->pdo->prepare('SELECT * FROM personas WHERE id = :id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $stmt = $this->pdo->prepare('INSERT INTO personas (nombre, edad, correo) VALUES (:nombre, :edad, :correo)');
        return $stmt->execute($data);
    }

    public function update($id, $data) {
        $data['id'] = $id;
        $stmt = $this->pdo->prepare('UPDATE personas SET nombre = :nombre, edad = :edad, correo = :correo WHERE id = :id');
        return $stmt->execute($data);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare('DELETE FROM personas WHERE id = :id');
        return $stmt->execute(['id' => $id]);
    }
}
?>
