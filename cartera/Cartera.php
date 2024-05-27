<?php

require_once 'config/config.php';

class Cartera extends ConexionBD {
    private $pdo;

    public function __construct() {
        global $pdo;
        $this->pdo = $pdo;
    }

    public function getAll() {
        try {
            $sql = 'SELECT * FROM carteras';
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
            $sql = 'SELECT * FROM carteras WHERE id = :id';
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
            $sql = 'INSERT INTO carteras (fecha, total, id_pelicula, id_sala) VALUES (:fecha, :total, :id_pelicula, :id_sala)';
            $stmt = ConexionBD::getConnection()->prepare($sql);
            $stmt->bindParam(':fecha', $data['fecha']);
            $stmt->bindParam(':total', $data['total']);
            $stmt->bindParam(':id_pelicula', $data['id_pelicula']);
            $stmt->bindParam(':id_sala', $data['id_sala']);
            $stmt->execute();
            return true;
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }

    public function update($id, $data) {
        try {
            $sql = 'UPDATE carteras SET fecha = :fecha, total = :total, id_pelicula = :id_pelicula, id_sala = :id_sala WHERE id = :id';
            $stmt = ConexionBD::getConnection()->prepare($sql);
            $stmt->bindParam(':fecha', $data['fecha']);
            $stmt->bindParam(':total', $data['total']);
            $stmt->bindParam(':id_pelicula', $data['id_pelicula']);
            $stmt->bindParam(':id_sala', $data['id_sala']);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return true;
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }

    public function delete($id) {
        try {
            $sql = 'DELETE FROM carteras WHERE id = :id';
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
