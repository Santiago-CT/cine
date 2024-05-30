<?php

require_once __DIR__ . '/../config/config.php';

class Pelicula extends ConexionBD {
    private $pdo;

    public function __construct() {
        global $pdo;
        $this->pdo = $pdo;
    }
    public function getVistaPP() {
        try {
            $sql = 'SELECT * FROM vista_proyecciones_peliculas';
            $stmt = ConexionBD::getConnection()->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }
    public function getFecha($nombre_pelicula) {
        try {
            $sql = 'SELECT fecha_proyeccion, hora_proyeccion FROM vista_proyecciones_peliculas WHERE nombre_pelicula = :nombre_pelicula';
            $stmt = ConexionBD::getConnection()->prepare($sql);
            $stmt->bindParam(':nombre_pelicula', $nombre_pelicula);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }
    
    public function getAll() {
        try {
            $sql = 'SELECT id,titulo,poster_url,sinopsis FROM peliculas';
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

    public function create($titulo,$duracion,$fecha_estreno,$director,$sinopsis,$genero,$restriccion,$idioma,$poster_url,$trailer_url) {
        try {
            $sql = 'INSERT INTO peliculas (titulo, duracion, fecha_estreno, director,sinopsis,genero,restriccion,idioma,poster_url,trailer_url) VALUES (:titulo, :duracion, :fecha_estreno, :director,:sinopsis,:genero,:restriccion,:idioma,:poster_url,:trailer_url)';
            $stmt = ConexionBD::getConnection()->prepare($sql);
            $stmt->bindParam(':titulo', $titulo);
            $stmt->bindParam(':duracion', $duracion);
            $stmt->bindParam(':fecha_estreno', $fecha_estreno);
            $stmt->bindParam(':director', $director);
            $stmt->bindParam(':sinopsis', $sinopsis);
            $stmt->bindParam(':genero', $genero);
            $stmt->bindParam(':restriccion', $restriccion);
            $stmt->bindParam(':idioma', $idioma);
            $stmt->bindParam(':poster_url', $poster_url);
            $stmt->bindParam(':trailer_url', $trailer_url);
            $stmt->execute();
            return true;
        } catch (PDOException $th) {
            echo $th->getMessage();
        }
    }

    public function update($id, $titulo,$duracion,$fecha_estreno,$director,$sinopsis,$genero,$restriccion,$idioma,$poster_url,$trailer_url) {
        try {
            $sql = 'UPDATE peliculas SET titulo = :titulo, duracion = :duracion, fecha_estreno = :fecha_estreno,director = :director ,sinopsis=:sinopsis,genero = :genero,restriccion=:restriccion,idioma=:idioma,poster_url=:poster_url,trailer_url=:trailer_url  WHERE id = :id';
            $stmt = ConexionBD::getConnection()->prepare($sql);
            $stmt->bindParam(':titulo', $titulo);
            $stmt->bindParam(':duracion', $duracion);
            $stmt->bindParam(':fecha_estreno', $fecha_estreno);
            $stmt->bindParam(':director', $director);
            $stmt->bindParam(':sinopsis', $sinopsis);
            $stmt->bindParam(':genero', $genero);
            $stmt->bindParam(':restriccion', $restriccion);
            $stmt->bindParam(':idioma', $idioma);
            $stmt->bindParam(':poster_url', $poster_url);
            $stmt->bindParam(':trailer_url', $trailer_url);
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
