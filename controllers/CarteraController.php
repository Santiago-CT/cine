<?php

require_once 'models/Cartera.php';

class CarteraController {
    private $model;

    public function __construct() {
        $this->model = new Cartera();
    }

    public function index() {
        $carteras = $this->model->getAll();
        include 'views/carteras/index.php';
    }

    public function show($id) {
        $cartera = $this->model->getById($id);
        var_dump($cartera);
        include 'views/carteras/show.php';
    }

    public function create() {
        include 'views/carteras/create.php';
    }

    public function store() {
        $data = [
            'saldo' => $_POST['saldo']
        ];
        $this->model->create($data);
        header('Location: /carteras');
    }

    public function edit($id) {
        $cartera = $this->model->getById($id);
        include 'views/carteras/edit.php';
    }

    public function update($id) {
        $data = [
            'saldo' => $_POST['saldo']
        ];
        $this->model->update($id, $data);
        header('Location: /carteras');
    }

    public function delete($id) {
        $this->model->delete($id);
        header('Location: /carteras');
    }
}
?>
