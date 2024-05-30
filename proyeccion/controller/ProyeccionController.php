<?php

require_once 'models/Proyeccion.php';

class ProyeccionController {
    private $model;

    public function __construct() {
        $this->model = new Proyeccion();
    }

    public function index() {
        $proyecciones = $this->model->getAll();
        include 'views/proyecciones/index.php';
    }

    public function show($id) {
        $proyeccion = $this->model->getById($id);
        include 'views/proyecciones/show.php';
    }

    public function create() {
        include '../views/create.php';
    }

    public function store() {
        $data = [
            'pelicula_id' => $_POST['pelicula_id'],
            'sala_id' => $_POST['sala_id'],
            'fecha' => $_POST['fecha'],
            'hora' => $_POST['hora']
        ];
        $this->model->create($data);
        header('Location: /proyecciones');
    }

    public function edit($id) {
        $proyeccion = $this->model->getById($id);
        include 'views/proyecciones/edit.php';
    }

    public function update($id) {
        $data = [
            'pelicula_id' => $_POST['pelicula_id'],
            'sala_id' => $_POST['sala_id'],
            'fecha' => $_POST['fecha'],
            'hora' => $_POST['hora']
        ];
        $this->model->update($id, $data);
        header('Location: /proyecciones');
    }

    public function delete($id) {
        $this->model->delete($id);
        header('Location: /proyecciones');
    }
}
?>
