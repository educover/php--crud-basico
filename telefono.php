<?php
	class Telefono{
		private $id;
		private $nombre;
        private $telefono;
        
		function __construct(){}

		public function getId(){
			return $this->id;
			}
		 
		public function setId($id){
			$this->id = $id;
			}
 
		public function getNombre(){
			return $this->nombre;
		}
 
		public function setNombre($nombre){
			$this->nombre = $nombre;
		}
		public function getTelefono(){
			return $this->telefono;
		}
 
		public function setTelefono($telefono){
			$this->telefono = $telefono;
		}
	}