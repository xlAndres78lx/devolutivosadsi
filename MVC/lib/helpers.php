<?php

function getUrl($modulo,$controlador,$funcion,$parametros=false){
	$url="index.php?modulo=$modulo&controlador=$controlador&funcion=$funcion";
	if($parametros!=false){
		foreach($parametros as $key=>$valor){
			$url.="&$key=$valor";
		}
	}
	return $url;
}

function redirect($url){
	echo "<script type='text/javascript'> window.location.href='$url'; </script> ";
}

function sbMenu($modulo,$icoModulo,$controlador,$icoControlador){
	// Verificar si el módulo del menú corresponde al que estoy
	$activeModulo = ($modulo==$_GET['modulo']) ? "active-menu" : "";
	echo "<li>
			<a href=\"#\" class=\"waves-effect waves-dark {$activeModulo}\">
			<i class=\"fa {$icoModulo}\"></i>{$modulo}<span class=\"fa arrow\"> </span></a>
            	<ul class=\"nav nav-second-level\">";
                for($i=0;$i<count($controlador);$i++) {
                	// Verificar si el controlador del modulo corresponde al que estoy
                	$activeControlador = (($modulo==$_GET['modulo']) && ($controlador[$i]==$_GET['controlador'])) ? "active-menu" : "a";
                	echo "<li>
  							<a href=\"#\" class=\"".$activeControlador."\">
  							<i class=\"fa ".$icoControlador[$i]."\"></i> ".$controlador[$i]."<span class=\"fa arrow\"></span></a>
                            	<ul class=\"nav nav-third-level\">
                                	<li> <a href=\"".getUrl($modulo,$controlador[$i],'crear')."\" class=\"\"> Crear</a> 
                                	<li> <a href=\"".getUrl($modulo,$controlador[$i],'listar')."\">Listar</a> </li>
                                </ul>
                        </li>";
                }
    echo"</ul>
    </li>";
}
?>