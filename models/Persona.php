<?php

require_once 'config/config.php';

class Persona extends ConexionBD {
    private $pdo;

    public function __construct() {
        global $pdo;
        $this->pdo = $pdo;
    }

    public function getAll() {
        try{
        $sql ='SELECT * FROM personas';
        $stmt = ConexionBD::getConnection()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;

    }catch(PDOException $th){
        echo $th->getMessage();
    }
    }

    public function getById($id) { 
       try{
            $sql ='SELECT * FROM personas WHERE id = :id';
            $stmt = ConexionBD::getConnection()->prepare($sql);
            $stmt->bindParam(':id',$id);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
    
        }catch(PDOException $th){
            echo $th->getMessage();
        }
    }

    public function create($data) {
  
        try{
            $sql ='INSERT INTO personas (nombre,email,password,rol_id) VALUES (:nombre,:email,:password,:rol_id)';
            $stmt = ConexionBD::getConnection()->prepare($sql);
            $stmt->bindParam(':nombre',$data['nombre']);
            $stmt->bindParam(':email',$data['email']);
            $stmt->bindParam(':password',$data['password']);
            $stmt->bindParam(':rol_id',$data['rol_id']);
            $stmt->execute();
            
            return true;
    
        }catch(PDOException $th){
            echo $th->getMessage();
        }
    }

    public function update($id, $data) {
        try{
            $sql = 'UPDATE personas SET nombre = :nombre, email = :email, password = :password,:rol_id =:rol_id WHERE id = :id';
            $stmt = ConexionBD::getConnection()->prepare($sql);
            $stmt->bindParam(':nombre',$data['nombre']);
            $stmt->bindParam(':email',$data['email']);
            $stmt->bindParam(':password',$data['password']);
            $stmt->bindParam(':rol_id',$data['rol_id']);
            $stmt->bindParam(':id',$data['id']);
            $stmt->execute();
            return true;
    
        }catch(PDOException $th){
            echo $th->getMessage();
        }
    }

    public function delete($id) {
        try{
            $sql ='DELETE * FROM personas WHERE id = :id';
            $stmt = ConexionBD::getConnection()->prepare($sql);
            $stmt->bindParam(':id',$id);
            $stmt->execute();
            $result = $stmt->fetchAll();
            return $result;
    
        }catch(PDOException $th){
            echo $th->getMessage();
        }
    }
}
?>
