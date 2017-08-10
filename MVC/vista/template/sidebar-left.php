<?php
	// Obtener nombre de modulo/controlador/funcion para el sidebar
	$sbmodulo = $modulo; $sbcontrolador = $sbmodulo.'/'.$controlador; $sbfuncion = $sbcontrolador.'/'.$funcion;
?>
		<!-- Navegación lateral -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                	<li>
                		<a href="#" class="waves-effect waves-dark <?php echo ($sbmodulo=='usuario') ? 'active-menu':''; ?>">
						<i class="fa fa-address-card"></i> Usuario<span class="fa arrow"> </span></a>
                        <ul class="nav nav-second-level">
                            <li>
  								<a href="#" class="<?php echo ($sbcontrolador=='usuario/usuario') ? 'active-menu':''; ?>">
  								<i class="fa fa-address-card"></i> Usuario<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li> <a href="<?php echo getUrl('usuario','usuario','crear'); ?>" class="<?php echo ($sbfuncion=='usuario/usuario/crear') ? 'active-menu':''; ?>"> Crear</a> 
                                    <li> <a href="<?php echo getUrl('usuario','usuario','listar'); ?>" class="<?php echo ($sbfuncion=='usuario/usuario/listar') ? 'active-menu':''; ?>">Listar</a> </li>
                                </ul>
                            </li>
                            <li>
  								<a href="#" class="<?php echo ($sbcontrolador=='usuario/rol') ? 'active-menu':''; ?>">
  								<i class="fa fa-user-circle-o"></i> Rol<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li> <a href="<?php echo getUrl('usuario','rol','crear'); ?>" class="<?php echo ($sbfuncion=='usuario/rol/crear') ? 'active-menu':''; ?>"> Crear</a> 
                                    <li> <a href="<?php echo getUrl('usuario','rol','listar'); ?>" class="<?php echo ($sbfuncion=='usuario/rol/listar') ? 'active-menu':''; ?>">Listar</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- FIN Navegación lateral -->
