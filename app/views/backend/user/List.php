

<!-- Default box -->
<div class="box box-primary">
	<div class="box-header with-border">
		<h3 class="box-title"><?php echo $titulo?></h3>
	</div>
	<div class="box-body table-responsive no-padding">

		<div class="col-lg-12">
	
			<button id="agregar_user" onclick="ShowAddFormUser();"  class="btn bg-navy btn-flat margin">
					<i class="fa fa-plus-circle"></i>&nbsp;Agregar Nuevo Usuario
			</button>
		</div>

        <?php
       
            ?>
        <div class="col-lg-12"><div id="msg-error"  class="alert alert-success alert-dismissible error"></div></div>
        
        
        <div class="box-tools"
			style="padding-bottom: 100px; padding-right: 10px">
        <?php echo $links; ?>
            
        </div>



		<table class="table table-hover">
			<tbody>
				<tr>
					<th width="5%">#</th>
					<th width="20%">Usuario</th>
					<th width="20%">E-Mail</th>
					<th width="15%">Perfil</th>
					<th width="10%">Estado</th>
					<th width="15%">Accion</th>

				</tr>
            <?php foreach ($listado as $lista):?>  
            <tr>
					<td><?php echo $lista->id?></td>
					<td><?php echo $lista->nombre?></td>
					<td><?php echo $lista->email?></td>
					<td><?php echo $lista->descripcion ?></td>
					<td>
                   <?php if($lista->estado==1):?>
                	<span class="label label-success">Activo</span>
                   <?php else : ?>
                    <span class="label label-danger">Inctivo</span>
                   <?php endif;?>	
                </td>
					<td align="center">
						<div class="btn-group ">
							 <a	href="javascript:ShowViewFormUser(<?php echo $lista->id?>)"	class="btn btn-info btn-flat" data-toggle="tooltip" title="Ver"><i class="ion ion-ios-eye"></i></a> 
							 <a	 href="javascript:Activate(<?php echo $lista->id?>)" 	class="activar btn btn-info btn-flat" data-toggle="tooltip"	title="Activar/Desactivar"><i class="fa fa-check"></i></a>
							 <a	 onclick="javascript:ShowEditFormUser(<?php echo $lista->id?>);"  href="javascript:;"	class="btn btn-info btn-flat" data-toggle="tooltip"	title="Editar"><i class="ion ion-compose"></i></a> 
							 <a	href="javascript:ShowDeleteFormUser(<?php echo $lista->id?>)" class="btn btn-info btn-flat "	data-toggle="tooltip" title="Eliminar"><i class="fa fa-trash"></i></a>
							&nbsp;
						</div>
					</td>

				</tr>
            <?php endforeach;?>

            </tbody>
		</table>
	</div>
	<!-- /.box-body -->
	<div class="box-footer">
		<div class="box-tools">
        <?php echo $links; ?>
            <!--  <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">»</a></li>
            </ul>-->
		</div>
	</div>
	<!-- /.box-footer-->
</div>
<!-- /.box -->
<?php $attributes = array( 'id' => 'frmUser'); ?>

<!-- COMPOSE MESSAGE MODAL VER -->
<div class="modal fade" id="mymodal" tabindex="-1" role="dialog"
	aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-hidden="true">&times;</button>
				<h4 class="modal-title">
					<i class="fa fa-users blue"></i> <span id="ttt">Mantencion Usuarios</span></h4>
			</div>
			<?php echo form_open('',$attributes);?>
			
				<div class="modal-body"></div>
				<div class="modal-footer clearfix">
					<button type="button" id="cancelar" class="btn btn-danger"
						data-dismiss="modal">
						<i class="fa fa-times"></i> Cancelar
					</button>
					<button type="button" id="enviar" onclick="return Validarform()"
						class="btn btn-primary ">	Aceptar</button>

				</div>
			<?php echo form_close(); ?>	
			
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->



<!-- COMPOSE MESSAGE MODAL VER -->
<div class="modal fade" id="mymodal2" tabindex="-1" role="dialog"
	aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-hidden="true">&times;</button>
				<h4 class="modal-title">
					<i class="fa fa-users blue"></i> <span id="tt">Mantencion Usuarios</span></h4>
			</div>
			<?php echo form_open('',$attributes);?>
			
				<div class="modal-body"></div>
				<div class="modal-footer clearfix">
					<button type="button" id="cancelar" class="btn btn-danger"
						data-dismiss="modal">
						<i class="fa fa-times"></i> Cancelar
					</button>
					

				</div>
			<?php echo form_close(); ?>	
			
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
