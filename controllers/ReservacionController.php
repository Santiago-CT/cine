<?php

require_once 'models/Reservacion.php';

class ReservacionController {
    private $model;

    public function __construct() {
        $this->model = new Reservacion();
    }

    public function index() {
        $reservaciones = $this->model->getAll();
        include 'views/reservaciones/index.php';
    }

    public function show($id) {
        $reservacion = $this->model->getById($id);
        include 'views/reservaciones/show.php';
    }

    public function create() {
        include 'views/reservaciones/create.php';
    }

    public function store() {
        $data = [
            'persona_id' => $_POST['persona_id'],
            'proyeccion_id' => $_POST['proyeccion_id'],
            'cantidad' => $_POST['cantidad'],
            'fecha_reserva' => $_POST['fecha_reserva']
        ];
        $this->model->create($data);
        header('Location: ./cine/views/reservaciones/index.php');
    }

    public function edit($id) {
        $reservacion = $this->model->getById($id);
        include 'views/reservaciones/edit.php';
    }

    public function update($id) {
        $data = [
            'persona_id' => $_POST['persona_id'],
            'proyeccion_id' => $_POST['proyeccion_id'],
            'cantidad' => $_POST['cantidad'],
            'fecha_reserva' => $_POST['fecha_reserva']
        ];
        $this->model->update($id, $data);
        header('Location: /reservaciones');
    }

    public function delete($id) {
        $this->model->delete($id);
        header('Location: /reservaciones');
    }
}
?>
