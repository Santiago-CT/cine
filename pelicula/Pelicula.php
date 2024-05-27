<?php

require_once 'config/config.php';

class Pelicula extends ConexionBD {
    private $pdo;

    public function __construct() {
        global $pdo;
        $this->pdo = $pdo;
    }

    public function getAll() {
        try {
            $sql = 'SELECT * FROM peliculas';
            $stmt = ConexionBD::getConnection()->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }

    public function getById($id) {
        try {
            $sql = 'SELECT * FROM peliculas WHERE id = :id';
            $stmt = ConexionBD::getConnection()->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }

    public function create($data) {
        try {
            $sql = 'INSERT INTO peliculas (titulo, duracion, fecha_estreno, genero_id, director_id) VALUES (:titulo, :duracion, :fecha_estreno, :genero_id, :director_id)';
            $stmt = ConexionBD::getConnection()->prepare($sql);
            $stmt->bindParam(':titulo', $data['titulo']);
            $stmt->bindParam(':duracion', $data['duracion']);
            $stmt->bindParam(':fecha_estreno', $data['fecha_estreno']);
            $stmt->bindParam(':genero_id', $data['genero_id']);
            $stmt->bindParam(':director_id', $data['director_id']);
            $stmt->execute();
            return true;
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }

    public function update($id, $data) {
        try {
            $sql = 'UPDATE peliculas SET titulo = :titulo, duracion = :duracion, fecha_estreno = :fecha_estreno, genero_id = :genero_id, director_id = :director_id WHERE id = :id';
            $stmt = ConexionBD::getConnection()->prepare($sql);
            $stmt->bindParam(':titulo', $data['titulo']);
            $stmt->bindParam(':duracion', $data['duracion']);
            $stmt->bindParam(':fecha_estreno', $data['fecha_estreno']);
            $stmt->bindParam(':genero_id', $data['genero_id']);
            $stmt->bindParam(':director_id', $data['director_id']);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return true;
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }

    public function delete($id) {
        try {
            $sql = 'DELETE FROM peliculas WHERE id = :id';
            $stmt = ConexionBD::getConnection()->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return true;
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }
}
?>
