<?php
class rolController{
	function crear(){
		include_once 'vista/usuario/rol/crear.php';
	}
	function postCrear(){
		extract($_POST);
		include_once 'modelo/usuario/rol.php';
		// Crear objeto de ROL
		$objRol = new rolModel();
		// Envíar datos
		$objRol->postCrear($usurol_nombre);
	}
	function listar(){
		include_once 'modelo/usuario/rol.php';
		// Crear objeto de ROL
		$objRol = new rolModel();
		include_once 'vista/usuario/rol/listar.php';
	}
}
?>