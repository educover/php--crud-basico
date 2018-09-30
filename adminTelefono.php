<?php

require_once("crudTelefono.php");
require_once("telefono.php");

$crud = new CrudTelefono();
$telefono = new Telefono();

if(isset($_POST["insertar"])){
    $telefono->setNombre($_POST["nombre"]);
    $telefono->setTelefono($_POST["telefono"]);
    $crud->insertar($telefono);
    header("Location: index.php");
} else if(isset($_POST["actualizar"])){
    $telefono->setId($_POST["id"]);
    $telefono->setNombre($_POST["nombre"]);
    $telefono->setTelefono($_POST["telefono"]);
    $crud->actualizar($telefono);
    header("Location: index.php");
} else if($_GET["accion"]=="e"){
    $crud->eliminar($_GET["id"]);
    header("Location: index.php");
} else if($_GET["accion"]=="a"){
    header("Location: actualizar.php");
}