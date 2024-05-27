<?php
require_once 'config/config.php';

class Pelicula {
    private $pdo;

    public function __construct() {
        global $pdo;
        $this->pdo = $pdo;
    }

    public function getAll() {
        $stmt = $this->pdo->query('SELECT * FROM peliculas');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->pdo->prepare('SELECT * FROM peliculas WHERE id = :id');
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $stmt = $this->pdo->prepare('INSERT INTO peliculas (titulo, duracion, fecha_estreno, genero_id, director_id) VALUES (:titulo, :duracion, :fecha_estreno, :genero_id, :director_id)');
        return $stmt->execute($data);
    }

    public function update($id, $data) {
        $data['id'] = $id;
        $stmt = $this->pdo->prepare('UPDATE peliculas SET titulo = :titulo, duracion = :duracion, fecha_estreno = :fecha_estreno, genero_id = :genero_id, director_id = :director_id WHERE id = :id');
        return $stmt->execute($data);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare('DELETE FROM peliculas WHERE id = :id');
        return $stmt->execute(['id' => $id]);
    }
}
?>
