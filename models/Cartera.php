<?php

require_once '/var/www/html/cine/config/config.php';

class Cartera {
    private $pdo;

    public function __construct() {
        global $pdo;
        $this->pdo = $pdo;
    }

    public function getAll() {
        $stmt = $this->pdo->query('SELECT * FROM cartera');
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->pdo->prepare('SELECT * FROM cartera WHERE id = :id');
        $stmt->execute(['id' => $id]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        var_dump($result); 
        return $result;
    }

    public function create($data) {
        $stmt = $this->pdo->prepare('INSERT INTO cartera (saldo) VALUES (:saldo)');
        return $stmt->execute($data);
    }

    public function update($id, $data) {
        $data['id'] = $id;
        $stmt = $this->pdo->prepare('UPDATE cartera SET saldo = :saldo WHERE id = :id');
        return $stmt->execute($data);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare('DELETE FROM cartera WHERE id = :id');
        return $stmt->execute(['id' => $id]);
    }
}
?>
