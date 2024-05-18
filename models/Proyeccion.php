<?php

require_once 'config/config.php';

class Proyeccion {
    private $pdo;

    public function __construct() {
        global $pdo;
        $this->pdo = $pdo;
    }

    public function getAll() {
        $stmt = $this->pdo->query('SELECT * FROM proyecciones');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->pdo->prepare('SELECT * FROM proyecciones WHERE id = :id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $stmt = $this->pdo->prepare('INSERT INTO proyecciones (pelicula_id, sala_id, fecha, hora) VALUES (:pelicula_id, :sala_id, :fecha, :hora)');
        return $stmt->execute($data);
    }

    public function update($id, $data) {
        $data['id'] = $id;
        $stmt = $this->pdo->prepare('UPDATE proyecciones SET pelicula_id = :pelicula_id, sala_id = :sala_id, fecha = :fecha, hora = :hora WHERE id = :id');
        return $stmt->execute($data);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare('DELETE FROM proyecciones WHERE id = :id');
        return $stmt->execute(['id' => $id]);
    }
}
?>
