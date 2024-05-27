<?php
require_once '../Sala.php';
$sala = new Sala();
$salas = $sala->getAll();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salas</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style><?php  include('../../estilos/salas.css')  ?></style>
</head>
<body>

   <section >

    <?php
        require_once ('/var/www/html/cine/componentes/menu-bar.php')
    ?>
   </section>
    <div class="container mural" >
    
      <h1 class="my-4">Salas</h1>
      <a href="./create.php" class="btn btn-primary mb-3">Crear Sala</a>
      <table class="table table-striped">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>Nombre</th>
                  <th>Capacidad</th>
                  <th>Acciones</th>
              </tr>
          </thead>
          <tbody>
              <?php foreach ($salas as $sala): ?>

                  <tr>
                      <td><?= $sala['id'] ?></td>
                      <td><?= $sala['nombre'] ?></td>
                      <td><?= $sala['capacidad'] ?></td>
                    <td>
                        <a href="./show.php?= $sala['id'] ?>" class="btn btn-info">Ver</a>
                            <a href="./edit.php?= $sala['id'] ?>" class="btn btn-warning">Editar</a>
                        
                            <form action="../controller/delete.php" method="POST" style="display:inline;">
                                <input type="hidden" name="id" value="<?= $sala['id'] ?>">
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>        
        
</body>
</html>
