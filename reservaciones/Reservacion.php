<?php

require_once __DIR__ . '/../config/config.php';

class Reservacion extends ConexionBD {
    private $pdo;

    public function __construct() {
        global $pdo;
        $this->pdo = $pdo;
    }

    public function getAll() {
        try {
            $sql = 'SELECT * FROM reservaciones';
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
            $sql = 'SELECT * FROM reservaciones WHERE id = :id';
            $stmt = ConexionBD::getConnection()->prepare($sql);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            $result = $stmt->fetch();
            return $result;
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }

    public function create($persona_id, $proyeccion_id,$silla_id,$fecha_reservacion,$cantidad) {
        try {
            $sql = 'INSERT INTO reservaciones (persona_id, sala_id, silla_id, proyeccion_id, fecha_reservacion, estado) VALUES (:persona_id, :sala_id, :silla_id, :proyeccion_id, :fecha_reservacion, :estado)';
            $stmt = ConexionBD::getConnection()->prepare($sql);
            $stmt->bindParam(':persona_id', $persona_id);
            $stmt->bindParam(':proyeccion_id', $proyeccion_id);
            $stmt->bindParam(':silla_id', $silla_id);
            $stmt->bindParam(':fecha_reservacion', $fecha_reservacion);
            $stmt->bindParam(':cantidad', $cantidad);
            $stmt->execute();
            return true;
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }

    public function update($id, $persona_id, $proyeccion_id,$silla_id,$fecha_reservacion,$cantidad) {
        try {
            $sql = 'UPDATE reservaciones SET persona_id = :persona_id, sala_id = :sala_id, silla_id = :silla_id, proyeccion_id = :proyeccion_id, fecha_reservacion = :fecha_reservacion, estado = :estado WHERE id = :id';
            $stmt = ConexionBD::getConnection()->prepare($sql);
            $stmt->bindParam(':persona_id', $persona_id);
            $stmt->bindParam(':proyeccion_id', $proyeccion_id);
            $stmt->bindParam(':silla_id', $silla_id);
            $stmt->bindParam(':fecha_reservacion', $fecha_reservacion);
            $stmt->bindParam(':cantidad', $cantidad);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return true;
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }

    public function delete($id) {
        try {
            $sql = 'DELETE FROM reservaciones WHERE id = :id';
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
