<?php

require_once 'models/Sala.php';

class SalaController {
    
    public function index() {
        $salas = Sala::getAll();
        require 'views/salas/index.php';
    }

    public function show($id) {
        $sala = Sala::getById($id);
        require 'views/salas/show.php';
    }

    public function create() {
        require 'views/salas/create.php';
    }

    public function store() {
        $data = [
            'nombre' => $_POST['nombre'],
            'capacidad' => $_POST['capacidad']
        ];
        Sala::create($data);
        header('Location: /salas');
    }

    public function edit($id) {
        $sala = Sala::getById($id);
        require 'views/salas/edit.php';
    }

    public function update($id) {
        $data = [
            'nombre' => $_POST['nombre'],
            'capacidad' => $_POST['capacidad']
        ];
        Sala::update($id, $data);
        header('Location: /salas');
    }

    public function delete($id) {
        Sala::delete($id);
        header('Location: /salas');
    }
}
?>
