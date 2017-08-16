        <!-- PAGE WRAPPER -->
        <div id="page-wrapper">
            <!-- Información página actual -->
            <div class="header">
                <h1 class="page-header">Crear usuario</h1>
                <ol class="breadcrumb">
    				<li>Usuario</li>
    				<li class="active">Crear</li>
    			</ol>				
    		</div>
            <!-- FIN Información página actual -->
            <!-- Cuerpo página actual -->
<div id="page-inner">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-content">
            <form action="<?php echo getUrl('Usuario','Usuario','postCrear');?>" method="POST">
				<div class="input-field col s6">
                    <input type="text" class="validate" id="usu_id" placeholder="Número de identificación">
                </div>
                <div class="input-field col s6">
                    <button class="btn btn-primary"><li class="fa fa-floppy-o"></li> Crear</button>
                </div>
			</form>
            </div>
		</div>
	</div>