<?
require_once 'models/Pelicula.php';

class PeliculaController{
    private $model;

    public function __construct()
    {
        $this->model = new Pelicula();
    }
    public function index(){
        $peliculas = $this->model->getAll();
        include 'views/peliculas/index.php';
    }
    public function show($id){
        $pelicula = $this->model->getById($id);
        include 'views/peliculas/show.php';
    }
    public function create() {
        include 'views/peliculas/create.php';
    }

    public function store() {
        $data = [
            'titulo' => $_POST['titulo'],
            'duracion' => $_POST['duracion'],
            'fecha_estreno' => $_POST['fecha_estreno'],
            'genero_id' => $_POST['genero_id'],
            'director_id' => $_POST['director_id']
        ];
        $this->model->create($data);
        header('Location: /peliculas');
    }

    public function edit($id) {
        $pelicula = $this->model->getById($id);
        include 'views/peliculas/edit.php';
    }

    public function update($id) {
        $data = [
            'titulo' => $_POST['titulo'],
            'duracion' => $_POST['duracion'],
            'fecha_estreno' => $_POST['fecha_estreno'],
            'genero_id' => $_POST['genero_id'],
            'director_id' => $_POST['director_id']
        ];
        $this->model->update($id, $data);
        header('Location: /peliculas');
    }

    public function delete($id) {
        $this->model->delete($id);
        header('Location: /peliculas');
    }
}
?>

