<?php


require_once 'models/CastPelicula.php';

class CastPeliculaController {
    private $model;

    public function __construct() {
        $this->model = new CastPelicula();
    }

    public function index() {
        $cast = $this->model->getAll();
        include 'views/cast_peliculas/index.php';
    }

    public function show($id) {
        $cast = $this->model->getById($id);
        include 'views/cast_peliculas/show.php';
    }

    public function create() {
        include 'views/cast_peliculas/create.php';
    }

    public function store() {
        $data = [
            'pelicula_id' => $_POST['pelicula_id'],
            'actor_id' => $_POST['actor_id'],
            'rol' => $_POST['rol']
        ];
        $this->model->create($data);
        header('Location: /cast_peliculas');
    }

    public function edit($id) {
        $cast = $this->model->getById($id);
        include 'views/cast_peliculas/edit.php';
    }

    public function update($id) {
        $data = [
            'pelicula_id' => $_POST['pelicula_id'],
            'actor_id' => $_POST['actor_id'],
            'rol' => $_POST['rol']
        ];
        $this->model->update($id, $data);
        header('Location: /cast_peliculas');
    }

    public function delete($id) {
        $this->model->delete($id);
        header('Location: /cast_peliculas');
    }
}
?>
