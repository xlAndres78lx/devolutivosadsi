<?php
	session_start();
	// Includes
	include_once 'lib/helpers.php';
	include_once 'vista/template/head.php';
	include_once 'vista/template/header.php';
	include_once 'vista/template/sidebar-left.php';
	// Modulos
	if( !isset($_GET['modulo']) && !isset($_GET['controlador']) && !isset($_GET['funcion']) ){
		
	} else {
		// Obtener modulo/controlador/funcion
		$modulo=ucwords($_GET['modulo']);
		$controlador=$_GET['controlador'];
		$funcion=$_GET['funcion'];
		// Verificar si existe el modulo
		if (is_dir("controlador/$modulo")) {
			// Verificar si existe el archivo controlador
			if(file_exists("controlador/$modulo/{$controlador}Controller.php")){
				// Verificar si existe la función
				include_once("controlador/$modulo/{$controlador}Controller.php");
				$nombreClase = "{$controlador}Controller";
				$objControlador = new $nombreClase;
				if (method_exists($objControlador, $funcion)){
    				$objControlador->$funcion();
    			} else {
    				echo "La función no existe.";
    			}
			} else {
				echo "El archivo controlador no existe.";
			}
		} else {
			echo "El modulo no existe.";
		}
	}
	include_once 'vista/template/footer.php';
?>