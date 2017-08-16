<?php
include_once 'modelo/masterModel.php';
class rolModel extends masterModel {
	function postCrear($usurol_nombre){
		// Preparar la consulta SQL
		$sql = "INSERT INTO usuariorol (usurol_nombre) VALUES ('$usurol_nombre')";
		// Crear el objeto de master model
		$objMaster = new masterModel();
		// Ejecutar el código SQL
		$objMaster->insert($sql);
		// Crear el redireccionamiento
		redirect(getUrl('Usuario','Rol','Listar'));
	}
	function listar(){
		// Preparar la consulta SQL
		$sql = "SELECT * FROM usuariorol";
		// Crear el objeto de master model
		$objMaster = new masterModel();
		// Ejecutar el código SQL
		$roles = $objMaster->selectObjeto($sql);
		// Crear la tabla
		while( $rol = mysqli_fetch_object($roles) ){
			echo "<tr><td>".$rol->usurol_nombre."</td>
			<td><a href='".getUrl('Usuario','Rol','editar','$usurol_id')."'><button> Editar</button></a> <a href='".getUrl('Usuario','Rol','eliminar')."'><button> Eliminar</button></a></td></tr>";
		}
	}
}
?>