<?php

require_once 'controllers/ProyeccionController.php';
require_once 'controllers/ReservacionController.php';
require_once 'controllers/CarteraController.php';
require_once 'controllers/SalaController.php';
require_once 'controllers/GeneroController.php';
require_once 'controllers/HistorialPeliculasController.php';
require_once 'controllers/CastPeliculaController.php';

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$method = $_SERVER['REQUEST_METHOD'];

$routes = [
    'GET' => [
        '/' => function() {
            echo 'Bienvenido a la gestión de Cine Colombia';
        },
        '/proyecciones' => function() {
            $controller = new ProyeccionController();
            $controller->index();
        },
        '/proyecciones/show' => function() {
            $controller = new ProyeccionController();
            $id = $_GET['id'];
            $controller->show($id);
        },
        '/proyecciones/create' => function() {
            $controller = new ProyeccionController();
            $controller->create();
        },
        '/proyecciones/edit' => function() {
            $controller = new ProyeccionController();
            $id = $_GET['id'];
            $controller->edit($id);
        },
        '/reservaciones' => function() {
            $controller = new ReservacionController();
            $controller->index();
        },
        '/reservaciones/show' => function() {
            $controller = new ReservacionController();
            $id = $_GET['id'];
            $controller->show($id);
        },
        '/reservaciones/create' => function() {
            $controller = new ReservacionController();
            $controller->create();
        },
        '/reservaciones/edit' => function() {
            $controller = new ReservacionController();
            $id = $_GET['id'];
            $controller->edit($id);
        },
        '/carteras' => function() {
            $controller = new CarteraController();
            $controller->index();
        },
        '/carteras/show' => function() {
            $controller = new CarteraController();
            $id = $_GET['id'];
            $controller->show($id);
        },
        '/carteras/create' => function() {
            $controller = new CarteraController();
            $controller->create();
        },
        '/carteras/edit' => function() {
            $controller = new CarteraController();
            $id = $_GET['id'];
            $controller->edit($id);
        },
        '/salas' => function() {
            $controller = new SalaController();
            $controller->index();
        },
        '/salas/show' => function() {
            $controller = new SalaController();
            $id = $_GET['id'];
            $controller->show($id);
        },
        '/salas/create' => function() {
            $controller = new SalaController();
            $controller->create();
        },
        '/salas/edit' => function() {
            $controller = new SalaController();
            $id = $_GET['id'];
            $controller->edit($id);
        },
        '/generos' => function() {
            $controller = new GeneroController();
            $controller->index();
        },
        '/generos/show' => function() {
            $controller = new GeneroController();
            $id = $_GET['id'];
            $controller->show($id);
        },
        '/generos/create' => function() {
            $controller = new GeneroController();
            $controller->create();
        },
        '/generos/edit' => function() {
            $controller = new GeneroController();
            $id = $_GET['id'];
            $controller->edit($id);
        },
        '/historial_peliculas' => function() {
            $controller = new HistorialPeliculasController();
            $controller->index();
        },
        '/historial_peliculas/show' => function() {
            $controller = new HistorialPeliculasController();
            $id = $_GET['id'];
            $controller->show($id);
        },
        '/historial_peliculas/create' => function() {
            $controller = new HistorialPeliculasController();
            $controller->create();
        },
        '/historial_peliculas/edit' => function() {
            $controller = new HistorialPeliculasController();
            $id = $_GET['id'];
            $controller->edit($id);
        },
        '/casts' => function() {
            $controller = new CastPeliculaController();
            $controller->index();
        },
        '/casts/show' => function() {
            $controller = new CastPeliculaController();
            $id = $_GET['id'];
            $controller->show($id);
        },
        '/casts/create' => function() {
            $controller = new CastPeliculaController();
            $controller->create();
        },
        '/casts/edit' => function() {
            $controller = new CastPeliculaController();
            $id = $_GET['id'];
            $controller->edit($id);
        }
    ],
    'POST' => [
        '/proyecciones/store' => function() {
            $controller = new ProyeccionController();
            $controller->store();
        },
        '/proyecciones/update' => function() {
            $controller = new ProyeccionController();
            $id = $_POST['id'];
            $controller->update($id);
        },
        '/proyecciones/delete' => function() {
            $controller = new ProyeccionController();
            $id = $_POST['id'];
            $controller->delete($id);
        },
        '/reservaciones/store' => function() {
            $controller = new ReservacionController();
            $controller->store();
        },
        '/reservaciones/update' => function() {
            $controller = new ReservacionController();
            $id = $_POST['id'];
            $controller->update($id);
        },
        '/reservaciones/delete' => function() {
            $controller = new ReservacionController();
            $id = $_POST['id'];
            $controller->delete($id);
        },
        '/carteras/store' => function() {
            $controller = new CarteraController();
            $controller->store();
        },
        '/carteras/update' => function() {
            $controller = new CarteraController();
            $id = $_POST['id'];
            $controller->update($id);
        },
        '/carteras/delete' => function() {
            $controller = new CarteraController();
            $id = $_POST['id'];
            $controller->delete($id);
        },
        '/salas/store' => function() {
            $controller = new SalaController();
            $controller->store();
        },
        '/salas/update' => function() {
            $controller = new SalaController();
            $id = $_POST['id'];
            $controller->update($id);
        },
        '/salas/delete' => function() {
            $controller = new SalaController();
            $id = $_POST['id'];
            $controller->delete($id);
        },
        '/generos/store' => function() {
            $controller = new GeneroController();
            $controller->store();
        },
        '/generos/update' => function() {
            $controller = new GeneroController();
            $id = $_POST['id'];
            $controller->update($id);
        },
        '/generos/delete' => function() {
            $controller = new GeneroController();
            $id = $_POST['id'];
            $controller->delete($id);
        },
        '/historial_peliculas/store' => function() {
            $controller = new HistorialPeliculasController();
            $controller->store();
        },
        '/historial_peliculas/update' => function() {
            $controller = new HistorialPeliculasController();
            $id = $_POST['id'];
            $controller->update($id);
        },
        '/historial_peliculas/delete' => function() {
            $controller = new HistorialPeliculasController();
            $id = $_POST['id'];
            $controller->delete($id);
        },
        '/casts/store' => function() {
            $controller = new CastPeliculaController();
            $controller->store();
        },
        '/casts/update' => function() {
            $controller = new CastPeliculaController();
            $id = $_POST['id'];
            $controller->update($id);
        },
        '/casts/delete' => function() {
            $controller = new CastPeliculaController();
            $id = $_POST['id'];
            $controller->delete($id);
        }
    ]
];

if (array_key_exists($method, $routes) && array_key_exists($uri, $routes[$method])) {
    $routes[$method][$uri]();
} else {
    http_response_code(404);
    echo 'Página no encontrada';
}
?>
