<?php
//echo "<pre>";
//print_r($lists);
?>

<!-- Default box -->
<div class="box box-primary">
<div class="box-header with-border">
<h3 class="box-title"><?php echo $titulo?></h3>
	</div>
	<div class="box-body table-responsive no-padding">

		<div class="col-lg-12">
			<button id="agregar_user" onclick="ShowAddProfile();"  class="btn bg-navy btn-flat margin">
					<i class="ion ion-plus-circled"></i>&nbsp;&nbsp;Agregar Perfil
			</button>
		</div>

		<table class="table table-hover">
			<thead>
				<tr>
					<th width="5%">#</th>
					<th width="35%">Descripcion</th>
					<th width="10%">Creado En</th>
					<th width="10%">Estado</th>
					<th width="15%">Accion</th>

				</tr>
			</thead>
			<tbody>
			<?php 
			   if (is_array($lists->Data)):
				foreach ($lists->Data as $list): 
			?>  
				<tr>
					<td><?php echo $list->profile_id?></td>
					<td><?php echo $list->profile_name?></td>
					<td><?php echo $list->profile_create_at?></td>
					<td>
						<?php if($list->profile_status==1):?>
                			<span class="label label-success">Activo</span>
                   		<?php else : ?>
                    		<span class="label label-danger">Inctivo</span>
                   		<?php endif;?></td>
					<td>
						<div class="btn-group ">
						fa-plus-circle	 <a	 href="javascript:ShowEditProfile(<?php echo $list->profile_id?>);"     data-toggle="tooltip"	title="Editar"><i class="green bigger-150 ion ion-compose" ></i></a>
							 <a	 href="javascript:ShowDeleteProfile(<?php echo $list->profile_id ?>)"   data-toggle="tooltip"   title="Eliminar"><i class="red bigger-150 fa fa-trash" ></i></a> 
						</div>
					</td>
					
				</tr>
			<?php 
				endforeach;
			   else :	
			?>
			   <tr>
				   <td colspan="6"><div class="text-center" >NO HAY REGISTROS</div></td>
			   </tr>
			<?php
				endif;
			?>


            </tbody>
		</table>
	</div>
	<!-- /.box-body -->
	<div class="box-footer">
		<div class="box-tools">
        
             <ul class="pagination pagination-sm no-margin pull-right">
                <li><a href="#">«</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">»</a></li>
            </ul>
		</div>
	</div>
	<!-- /.box-footer-->
</div>
<!-- /.box -->   

<?php $attributes = array( 'id' => 'frmProfile'); ?>

<!-- COMPOSE MESSAGE MODAL VER -->
<div class="modal fade" id="Profile" tabindex="-1" role="dialog"
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



