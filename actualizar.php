<?php
//incluye la clase Libro y CrudLibro
	require_once('crudTelefono.php');
	require_once('telefono.php');
	$crud= new CrudTelefono();
	$telefono=new Telefono();
	//busca el libro utilizando el id, que es enviado por GET desde la vista mostrar.php
	$telefono=$crud->obtenerTelefono($_GET['id']);
?>

<html>
<head>
	<title>Actualizar Usuario</title>
</head>
<body>
	<form action='adminTelefono.php' method='post'>
	<table>
		<tr>
			<input type='hidden' name='id' value='<?= $telefono->getId(); ?>'>
			<td>Nombre usuario:</td>
			<td> <input type='text' name='nombre' value='<?= $telefono->getNombre(); ?>'></td>
		</tr>
		<tr>
			<td>Telefono:</td>
			<td><input type='text' name='telefono' value='<?= $telefono->getTelefono(); ?>' ></td>
		</tr>
		<input type='hidden' name='actualizar' value'actualizar'>
	</table>
	<input type='submit' value='Guardar'>
	<a href="index.php">Volver</a>
</form>
</body>
</html>