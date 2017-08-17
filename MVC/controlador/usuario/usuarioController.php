<?php
class usuarioController extends masterModel {
	function crear(){
		include_once 'vista/usuario/usuario/crear.php';
	}
	function postCrear(){
		extract($_POST);
	}
	function listar(){
		include_once 'vista/usuario/usuario/listar.php';
	}
}
?>