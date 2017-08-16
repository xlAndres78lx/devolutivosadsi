<?php
class usuarioController{
	function crear(){
		include_once 'vista/usuario/crear.php';
	}
	function postCrear(){
		extract($_POST);
	}
	function listar(){
		include_once 'vista/usuario/listar.php';
	}
}
?>