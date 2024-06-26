<?php
require './config/conexion.php';  // Conexión a la base de datos

// Realizar la consulta para obtener los roles
$query = "SELECT id, name FROM rol";
$result = pg_query($conexion, $query);

// Manejar el caso en que la consulta falle
if (!$result) {
    echo "Error en la consulta de roles.";
    exit;
}

// Almacenar los roles en un arreglo
$roles = [];
while ($row = pg_fetch_assoc($result)) {
    $roles[] = $row;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<style>
    .gradient-custom {
   
    background: #6a11cb;
    background: -webkit-linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1));
    background: linear-gradient(to right, rgba(106, 17, 203, 1), rgba(37, 117, 252, 1))
    }
    </style>



</head>


<body>
<section class="vh-100 gradient-custom">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
        <form action="registrar.php" method="POST">
            <div class="mb-md-5 mt-md-4 pb-5">

              <h2 class="fw-bold mb-2 text-uppercase">REGISTRO</h2>
              <p class="text-white-50 mb-5">INGRESA TUS DATOS!</p>

              <div data-mdb-input-init class="form-outline form-white mb-4">
                <input placeholder="Nombre" type="" name="name"  class="form-control form-control-lg" />
              </div>

              <div data-mdb-input-init class="form-outline form-white mb-4">
                <input placeholder="Email" type="email" name="email"  class="form-control form-control-lg" />
              </div>
              <div data-mdb-input-init class="form-outline form-white mb-4">
                <input placeholder="Password" type="password" name="pass"  class="form-control form-control-lg" />
              </div>

              <div data-mdb-input-init class="form-outline form-white mb-4">
                <select name="rol" class="form-control form-control-lg">
                  <?php foreach ($roles as $rol): ?>
                      <option value="<?= htmlspecialchars($rol['id']); ?>"><?= htmlspecialchars($rol['name']); ?></option>
                  <?php endforeach; ?>
                </select>
              </div>


              <button data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-light btn-lg px-5" type="submit">REGISTAR</button>
            </div>
        </form>
        <div>
              <p class="mb-0"> <a href="./login.php" class="text-white-50 fw-bold">Login Up</a>
              </p>
            </div>
        

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
</html>