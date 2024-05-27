<?php

require_once 'config/config.php';

class HistorialPelicula extends ConexionBD {
    private $pdo;

    public function __construct() {
        global $pdo;
        $this->pdo = $pdo;
    }

    public function getAll() {
        try {
            $sql = 'SELECT * FROM historial_peliculas';
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
            $sql = 'SELECT * FROM historial_peliculas WHERE id = :id';
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
            $sql = 'INSERT INTO historial_peliculas (pelicula_id, fecha_visualizacion) VALUES (:pelicula_id, :fecha_visualizacion)';
            $stmt = ConexionBD::getConnection()->prepare($sql);
            $stmt->bindParam(':pelicula_id', $data['pelicula_id']);
            $stmt->bindParam(':fecha_visualizacion', $data['fecha_visualizacion']);
            $stmt->execute();
            return true;
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }

    public function update($id, $data) {
        try {
            $sql = 'UPDATE historial_peliculas SET pelicula_id = :pelicula_id, fecha_visualizacion = :fecha_visualizacion WHERE id = :id';
            $stmt = ConexionBD::getConnection()->prepare($sql);
            $stmt->bindParam(':pelicula_id', $data['pelicula_id']);
            $stmt->bindParam(':fecha_visualizacion', $data['fecha_visualizacion']);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return true;
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }

    public function delete($id) {
        try {
            $sql = 'DELETE FROM historial_peliculas WHERE id = :id';
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
