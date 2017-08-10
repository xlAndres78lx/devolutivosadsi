        <!-- Navegación lateral -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                	<li>
                        <a href="#" class="waves-effect waves-dark"><i class="fa fa-address-card"></i> Usuario<span class="fa arrow"> </span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#"><i class="fa fa-address-card"></i> Usuario<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li> <a href="<?php echo getUrl('usuario','usuario','crear'); ?>">Crear</a> 
                                    <li> <a href="<?php echo getUrl('usuario','usuario','listar'); ?>">Listar</a> </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-user-circle-o"></i> Rol<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li> <a href="#">Crear</a> 
                                    <li> <a href="#">Listar</a> </li>
                                    <li> <a href="#">Actualizar</a> </li>
                                    <li> <a href="#">Eliminar</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="waves-effect waves-dark"><i class="fa fa-address-card"></i> Prestamo<span class="fa arrow"> </span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Prestamo<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li> <a href="#">Crear</a> 
                                    <li> <a href="#">Listar</a> </li>
                                    <li> <a href="#">Actualizar</a> </li>
                                    <li> <a href="#">Eliminar</a> </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- FIN Navegación lateral -->
