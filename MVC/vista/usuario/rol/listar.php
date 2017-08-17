        <!-- PAGE WRAPPER -->
        <div id="page-wrapper">
            <!-- Información página actual -->
            <div class="header">
                <h1 class="page-header">Listado de Roles</h1>
                <ol class="breadcrumb">
    				<li>Rol</li>
    				<li class="active">Listar</li>
    			</ol>				
    		</div>
            <!-- FIN Información página actual -->
            <!-- Cuerpo página actual -->
<div id="page-inner">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-content">
				<div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <th>Rol</th>
                            <th>Acciones</th>
                        </thead>
                        <tbody>
                        <?php $objRol->listar(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
		</div>
	</div>