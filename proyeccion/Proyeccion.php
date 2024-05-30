<?php
require_once __DIR__ . '/../config/config.php'; // Ajuste de la ruta

class Proyeccion extends ConexionBD {
    private $pdo;

    public function __construct() {
        global $pdo;
        $this->pdo = $pdo;
    }

    public function getAll() {
        try {
            $sql = 'SELECT * FROM proyecciones';
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
            $sql = 'SELECT * FROM proyecciones WHERE id = :id';
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
            $sql = "INSERT INTO proyecciones (sala_id, pelicula_id, fecha, hora) VALUES (:sala_id, :pelicula_id, :fecha, :hora)";
            $stmt = ConexionBD::getConnection()->prepare($sql);
            $stmt->bindParam(':sala_id', $data['sala_id']);
            $stmt->bindParam(':pelicula_id', $data['pelicula_id']);
            $stmt->bindParam(':fecha', $data['fecha']);
            $stmt->bindParam(':hora', $data['hora']);
            $stmt->execute();
            return true;
        } catch (PDOException $th) {
            echo $th->getMessage();
            return false;
        }
    }

    public function update($id, $data) {
        try {
            $sql = "UPDATE proyecciones SET sala_id = :sala_id, pelicula_id = :pelicula_id, fecha = :fecha, hora = :hora WHERE id = :id";
            $stmt = ConexionBD::getConnection()->prepare($sql);
            $stmt->bindParam(':sala_id', $data['sala_id']);
            $stmt->bindParam(':pelicula_id', $data['pelicula_id']);
            $stmt->bindParam(':fecha', $data['fecha']);
            $stmt->bindParam(':hora', $data['hora']);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return true;
        } catch (PDOException $th) {
            echo $th->getMessage();
            return false;
        }
    }
}
?>
