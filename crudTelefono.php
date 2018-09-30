<?php

require_once("conexion.php");

class CrudTelefono{
    public function __construct(){}

        public function insertar($telefono){
            $db = DbConnect::conectar();
            $insert=$db->prepare("INSERT INTO telefonos values(NULL, :nombre, :telefono)");
            $insert->bindValue("nombre", $telefono->getNombre());
            $insert->bindValue("telefono", $telefono->getTelefono());
            $insert->execute();
        }

        public function mostrar(){
			$db=DbConnect::conectar();
			$listaTelefonos=[];
			$select=$db->query('SELECT * FROM telefonos');
 
			foreach($select->fetchAll() as $telefono){
				$myTelf= new Telefono();
				$myTelf->setId($telefono['id']);
				$myTelf->setNombre($telefono['nombre']);
				$myTelf->setTelefono($telefono['telefono']);
				$listaTelefonos[]=$myTelf;
			}
			return $listaTelefonos;
        }
        
        public function eliminar($id){
			$db=DbConnect::conectar();
			$eliminar=$db->prepare('DELETE FROM telefonos WHERE id=:id');
			$eliminar->bindValue('id',$id);
			$eliminar->execute();
        }
        
        public function obtenerTelefono($id){
			$db=DbConnect::conectar();
			$select=$db->prepare('SELECT * FROM telefonos WHERE id=:id');
			$select->bindValue('id',$id);
			$select->execute();
			$telefono=$select->fetch();
			$myTelf= new Telefono();
			$myTelf->setId($telefono['id']);
			$myTelf->setNombre($telefono['nombre']);
			$myTelf->setTelefono($telefono['telefono']);
			return $myTelf;
        }
        
        public function actualizar($telefono){
			$db=DbConnect::conectar();
			$actualizar=$db->prepare('UPDATE telefonos SET nombre=:nombre, telefono=:telefono WHERE ID=:id');
			$actualizar->bindValue('id',$telefono->getId());
			$actualizar->bindValue('nombre',$telefono->getNombre());
			$actualizar->bindValue('telefono',$telefono->getTelefono());
			$actualizar->execute();
		}
}