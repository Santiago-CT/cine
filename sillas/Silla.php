<?php

require_once 'config/config.php';

class Silla extends ConexionBD {
    private $pdo;

    public function __construct() {
        global $pdo;
        $this->pdo = $pdo;
    }

    public function getAll() {
        try {
            $sql = 'SELECT * FROM sillas';
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
            $sql = 'SELECT * FROM sillas WHERE id = :id';
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
            $sql = 'INSERT INTO sillas (fila, numero, sala_id) VALUES (:fila, :numero, :sala_id)';
            $stmt = ConexionBD::getConnection()->prepare($sql);
            $stmt->bindParam(':fila', $data['fila']);
            $stmt->bindParam(':numero', $data['numero']);
            $stmt->bindParam(':sala_id', $data['sala_id']);
            $stmt->execute();
            return true;
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }

    public function update($id, $data) {
        try {
            $sql = 'UPDATE sillas SET fila = :fila, numero = :numero, sala_id = :sala_id WHERE id = :id';
            $stmt = ConexionBD::getConnection()->prepare($sql);
            $stmt->bindParam(':fila', $data['fila']);
            $stmt->bindParam(':numero', $data['numero']);
            $stmt->bindParam(':sala_id', $data['sala_id']);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return true;
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }

    public function delete($id) {
        try {
            $sql = 'DELETE FROM sillas WHERE id = :id';
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
