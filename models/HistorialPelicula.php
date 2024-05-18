<?php

require_once 'config/config.php';

class HistorialPeliculas {
    private $pdo;

    public function __construct() {
        global $pdo;
        $this->pdo = $pdo;
    }

    public function getAll() {
        $stmt = $this->pdo->query('SELECT * FROM historial_peliculas');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->pdo->prepare('SELECT * FROM historial_peliculas WHERE id = :id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $stmt = $this->pdo->prepare('INSERT INTO historial_peliculas (pelicula_id, fecha, evento) VALUES (:pelicula_id, :fecha, :evento)');
        return $stmt->execute($data);
    }

    public function update($id, $data) {
        $data['id'] = $id;
        $stmt = $this->pdo->prepare('UPDATE historial_peliculas SET pelicula_id = :pelicula_id, fecha = :fecha, evento = :evento WHERE id = :id');
        return $stmt->execute($data);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare('DELETE FROM historial_peliculas WHERE id = :id');
        return $stmt->execute(['id' => $id]);
    }
}
?>
