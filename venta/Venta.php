<?php

require_once 'config/config.php';

class Venta extends ConexionBD {
    private $pdo;

    public function __construct() {
        global $pdo;
        $this->pdo = $pdo;
    }

    public function getAll() {
        try {
            $sql = 'SELECT * FROM ventas';
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
            $sql = 'SELECT * FROM ventas WHERE id = :id';
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
            $sql = 'INSERT INTO ventas (persona_id, proyeccion_id, fecha, cantidad, total) VALUES (:persona_id, :proyeccion_id, :fecha, :cantidad, :total)';
            $stmt = ConexionBD::getConnection()->prepare($sql);
            $stmt->bindParam(':persona_id', $data['persona_id']);
            $stmt->bindParam(':proyeccion_id', $data['proyeccion_id']);
            $stmt->bindParam(':fecha', $data['fecha']);
            $stmt->bindParam(':cantidad', $data['cantidad']);
            $stmt->bindParam(':total', $data['total']);
            $stmt->execute();
            return true;
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }

    public function update($id, $data) {
        try {
            $sql = 'UPDATE ventas SET persona_id = :persona_id, proyeccion_id = :proyeccion_id, fecha = :fecha, cantidad = :cantidad, total = :total WHERE id = :id';
            $stmt = ConexionBD::getConnection()->prepare($sql);
            $stmt->bindParam(':persona_id', $data['persona_id']);
            $stmt->bindParam(':proyeccion_id', $data['proyeccion_id']);
            $stmt->bindParam(':fecha', $data['fecha']);
            $stmt->bindParam(':cantidad', $data['cantidad']);
            $stmt->bindParam(':total', $data['total']);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return true;
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }

    public function delete($id) {
        try {
            $sql = 'DELETE FROM ventas WHERE id = :id';
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
