<?php

require '/var/www/html/cine/sala/Sala.php';

class SalaController {
    private $model;

    public function __construct() {
        $this->model = new Sala();
    }

    public function index() {
        $salas = $this->model->getAll();
        include './sala/salas/index.php';
    }

    public function show($id) {
        $sala = $this->model->getById($id);
        include './sala/salas/show.php';
    }

    public function create() {
        include './sala/salas/create.php';
    }

    public function store() {
        $data = [
            'nombre' => $_POST['nombre'],
            'capacidad' => $_POST['capacidad']
        ];
        $this->model->create($data);
        header('Location: ../index.php');
    }

    public function edit($id) {
        $sala = $this->model->getById($id);
        include './sala/salas/edit.php';
    }

    public function update($id) {
        $data = [
            'nombre' => $_POST['nombre'],
            'capacidad' => $_POST['capacidad']
        ];
        $this->model->update($id, $data);
        header('Location: ./sala/Sala.php');
    }

    public function delete($id) {
        $this->model->delete($id);
        header('Location: ./sala/Sala.php');
    }
}
?>
