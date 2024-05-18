<?php

require_once 'config/config.php';

class CastPelicula {
    private $pdo;

    public function __construct() {
        global $pdo;
        $this->pdo = $pdo;
    }

    public function getAll() {
        $stmt = $this->pdo->query('SELECT * FROM cast_peliculas');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->pdo->prepare('SELECT * FROM cast_peliculas WHERE id = :id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $stmt = $this->pdo->prepare('INSERT INTO cast_peliculas (pelicula_id, actor_id, rol) VALUES (:pelicula_id, :actor_id, :rol)');
        return $stmt->execute($data);
    }

    public function update($id, $data) {
        $data['id'] = $id;
        $stmt = $this->pdo->prepare('UPDATE cast_peliculas SET pelicula_id = :pelicula_id, actor_id = :actor_id, rol = :rol WHERE id = :id');
        return $stmt->execute($data);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare('DELETE FROM cast_peliculas WHERE id = :id');
        return $stmt->execute(['id' => $id]);
    }
}
?>
