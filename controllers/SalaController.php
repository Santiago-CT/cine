<?php
// controllers/SalaController.php

require_once '../models/Sala.php';

class SalaController {
    private $model;

    public function __construct() {
        $this->model = new Sala();
    }

    public function index() {
        $salas = $this->model->getAll();
        include '../views/salas/index.php';
    }

    public function show($id) {
        $sala = $this->model->getById($id);
        include '../views/salas/show.php';
    }

    public function create() {
        include '../views/salas/create.php';
    }

    public function store() {
        $data = [
            'nombre' => $_POST['nombre'],
            'capacidad' => $_POST['capacidad']
        ];
        $this->model->create($data);
        header('Location: /salas');
    }

    public function edit($id) {
        $sala = $this->model->getById($id);
        include '../views/salas/edit.php';
    }

    public function update($id) {
        $data = [
            'nombre' => $_POST['nombre'],
            'capacidad' => $_POST['capacidad']
        ];
        $this->model->update($id, $data);
        header('Location: /salas');
    }

    public function delete($id) {
        $this->model->delete($id);
        header('Location: /salas');
    }
}
?>
