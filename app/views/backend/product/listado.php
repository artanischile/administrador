
<!-- Default box -->
<div class="box box-primary">
<div class="box-header with-border">
<h3 class="box-title"><?php echo $titulo?></h3>
	</div>
	<div class="box-body table-responsive no-padding">

		<div class="col-lg-12">
	
			<button id="agregar_user" onclick="ShowAddProduct();"  class="btn bg-navy btn-flat margin">
					<i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Agregar Producto
			</button>
		</div>

       
        
        

		<table class="table table-hover">
			<thead>
				<tr>
					<th width="5%">#</th>
					<th width="20%">Usuario</th>
					<th width="20%">E-Mail</th>
					<th width="15%">Perfil</th>
					<th width="10%">Estado</th>
					<th width="15%">Accion</th>

				</tr>
			</thead>
			<tbody>
				
           

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
<?php $attributes = array( 'id' => 'frmProduct'); ?>

<!-- COMPOSE MESSAGE MODAL VER -->
<div class="modal fade" id="product_modal" tabindex="-1" role="dialog"	aria-hidden="true">
	<div class="modal-dialog" style="width:80%">
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
<div class="modal fade" id="product_modal2" tabindex="-1" role="dialog"
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
