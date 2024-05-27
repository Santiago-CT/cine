<?php


require_once 'models/Genero.php';

class GeneroController {
    private $model;

    public function __construct() {
        $this->model = new Genero();
    }

    public function index() {
        $generos = $this->model->getAll();
        include 'views/generos/index.php';
    }

    public function show($id) {
        $genero = $this->model->getById($id);
        include 'views/generos/show.php';
    }

    public function create() {
        include 'views/generos/create.php';
    }

    public function store() {
        $data = [
            'nombre' => $_POST['nombre']
        ];
        $this->model->create($data);
        header('Location: /generos');
    }

    public function edit($id) {
        $genero = $this->model->getById($id);
        include 'views/generos/edit.php';
    }

    public function update($id) {
        $data = [
            'nombre' => $_POST['nombre']
        ];
        $this->model->update($id, $data);
        header('Location: /generos');
    }

    public function delete($id) {
        $this->model->delete($id);
        header('Location: /generos');
    }
}
?>
