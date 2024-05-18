<?php

require_once 'models/HistorialPeliculas.php';

class HistorialPeliculasController {
    private $model;

    public function __construct() {
        $this->model = new HistorialPeliculas();
    }

    public function index() {
        $historiales = $this->model->getAll();
        include 'views/historial_peliculas/index.php';
    }

    public function show($id) {
        $historial = $this->model->getById($id);
        include 'views/historial_peliculas/show.php';
    }

    public function create() {
        include 'views/historial_peliculas/create.php';
    }

    public function store() {
        $data = [
            'pelicula_id' => $_POST['pelicula_id'],
            'fecha' => $_POST['fecha'],
            'evento' => $_POST['evento']
        ];
        $this->model->create($data);
        header('Location: /historial_peliculas');
    }

    public function edit($id) {
        $historial = $this->model->getById($id);
        include 'views/historial_peliculas/edit.php';
    }

    public function update($id) {
        $data = [
            'pelicula_id' => $_POST['pelicula_id'],
            'fecha' => $_POST['fecha'],
            'evento' => $_POST['evento']
        ];
        $this->model->update($id, $data);
        header('Location: /historial_peliculas');
    }

    public function delete($id) {
        $this->model->delete($id);
        header('Location: /historial_peliculas');
    }
}
?>
