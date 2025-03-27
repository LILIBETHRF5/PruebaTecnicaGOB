<?php
include("connection.php");
$con = connection();

$sql = "SELECT * FROM users";
$query = mysqli_query($con, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="CSS/style.css" rel="stylesheet">
    <title>Users CRUD</title>
</head>

<body>
    <div class="users-form">
    <h1 class="display-4">Prueba Tecnica</h1>
        <div class="accordion" id="accordionPanelsStayOpenExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
      Crear usuario
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
      <div class="accordion-body">
        
        <strong>
            <form action="insert_user.php" method="POST">
        
<div class="row g-1">
  <div class="input-group mb-3">
    <div class="form-floating">
      <input type="text" class="form-control" name="name" id="floatingInputGrid" placeholder="Nombre" value="">
      <label for="floatingInputGrid">Nombre</label>
    </div>
  </div>
  <div class="input-group mb-3">
    <div class="form-floating">
    <input type="text" class="form-control" name="lastname" id="floatingInputGrid" placeholder="Apellido" value="">
    <label for="floatingInputGrid">Apellido</label>
    </div>
  </div>
  <div class="input-group mb-3">
    <div class="form-floating">
    <input type="text" class="form-control" name="username" id="floatingInputGrid" placeholder="Username" value="">
    <label for="floatingInputGrid">Username</label>
    </div>
  </div>
  <div class="input-group mb-3">
    <div class="form-floating">
      <input type="email" class="form-control" name="email" id="floatingInputGrid" placeholder="Email" value="">
      <label for="floatingInputGrid">Email address</label>
    </div>
  </div>
  <div class="input-group mb-3">
    <div class="form-floating">
      <input type="password" class="form-control" name="password" id="floatingInputGrid" placeholder="Password" value="">
      <label for="floatingInputGrid">Password</label>
    </div>
  </div>
  <div class="input-group mb-3">
    <div class="form-floating">
      <input type="tel" id="Phone" name="Phone" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" class="form-control" name="password" id="floatingInputGrid" placeholder="Phone" value="">
      <label for="floatingInputGrid">Telefono</label>
    </div>
  </div>
</div>

       </strong> 
            <input type="submit" value="Agregar"> 
        
        </form>
      </div>
    </div>
  </div>
        
   

    <div class="users-table">
    <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
        Tabla de Usuarios Registrados
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
      <div class="accordion-body">
    
      <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Username</th>
                    <th>Password</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_array($query)): ?>
                    <tr>
                        <th><?= $row['id'] ?></th>
                        <th><?= $row['name'] ?></th>
                        <th><?= $row['lastname'] ?></th>
                        <th><?= $row['username'] ?></th>
                        <th><?= $row['password'] ?></th>
                        <th><?= $row['email'] ?></th>
                        <th><?= $row['Phone'] ?></th>
                        <th><a href="update.php?id=<?= $row['id'] ?>" class="btn btn-primary">Editar</a></th>
                        <th><a href="delete_user.php?id=<?= $row['id'] ?>" class="btn btn-danger" >Eliminar</a></th>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
      </div>
    </div>
  </div>
    </div>
    </div>
    <a href="exportar.php" class="btn btn-success">Exportar a CSV</a>

</body>

</html>