<?php

require_once("crudTelefono.php");
require_once("telefono.php");

$crud = new CrudTelefono();
$telefono = new Telefono();
$listaTelefonos=$crud->mostrar();

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PDO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
<div class="text-center">
    <h1>Agenda de telefonos</h1>
</div>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nombre</th>
      <th scope="col">Telefono</th>
      <th scope="col">Actualizar</th>
      <th scope="col">Eliminar</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach($listaTelefonos as $telefono): ?>
        <tr>
            <th scope="row"><?= $telefono->getId(); ?></th>
            <td><?= $telefono->getNombre(); ?></td>
            <td><?= $telefono->getTelefono(); ?></td>
            <td><a href="actualizar.php?id=<?= $telefono->getId(); ?>&accion=a"><i class="fas fa-user-edit"></i></a></td>
            <td><a href="adminTelefono.php?id=<?= $telefono->getId(); ?>&accion=e"><i class="fas fa-user-minus"></i></a></td>
        </tr>
    <?php endforeach; ?>
  </tbody>
</table>

<a href="nuevoTelefono.php">Nuevo Telefono</a>
</body>
</html>