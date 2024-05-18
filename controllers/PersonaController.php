<?php
require_once 'models/Persona.php';

class PersonaController {
    private $model;

    public function __construct() {
        $this->model = new Persona();
    }

    public function index() {
        $personas = $this->model->getAll();
        include 'views/personas/index.php';
    }

    public function show($id) {
        $persona = $this->model->getById($id);
        include 'views/personas/show.php';
    }

    public function create() {
        include 'views/personas/create.php';
    }

    public function store() {
        $data = [
            'nombre' => $_POST['nombre'],
            'edad' => $_POST['edad'],
            'correo' => $_POST['correo']
        ];
        $this->model->create($data);
        header('Location: /personas');
    }

    public function edit($id) {
        $persona = $this->model->getById($id);
        include 'views/personas/edit.php';
    }

    public function update($id) {
        $data = [
            'nombre' => $_POST['nombre'],
            'edad' => $_POST['edad'],
            'correo' => $_POST['correo']
        ];
        $this->model->update($id, $data);
        header('Location: /personas');
    }

    public function delete($id) {
        $this->model->delete($id);
        header('Location: /personas');
    }
}
?>
