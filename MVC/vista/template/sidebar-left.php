<?php
	// Obtener nombre de modulo/controlador/funcion para el sidebar
	$sbmodulo = $modulo; $sbcontrolador = $sbmodulo.'/'.$controlador; $sbfuncion = $sbcontrolador.'/'.$funcion;
?>
		<!-- Navegación lateral -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <?php
                    // Crear menú para Usuarios
                    $controladores = array('Usuario','Rol');
                    $icoControladores = array('fa-address-card','fa-user-circle-o');
                    sbMenu('Usuario','fa-address-card',$controladores,$icoControladores);
                    // Crear menú para Prestamos
                    $controladores = array('Usuario','Rol');
                    $icoControladores = array('fa-address-card','fa-user-circle-o');
                    sbMenu('Mantenimiento','fa-wrench',$controladores,$icoControladores);                    
                    ?>
                </ul>
            </div>
        </nav>
        <!-- FIN Navegación lateral -->
