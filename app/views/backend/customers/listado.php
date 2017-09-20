<!-- Default box -->
<div class="box box-primary">
<div class="box-header with-border">
<h3 class="box-title"><?php echo $titulo?></h3>
	</div>
	<div class="box-body table-responsive no-padding">

		<div class="col-lg-12">
			<button id="agregar_user" onclick="ShowAddBanner();"  class="btn bg-navy btn-flat margin">
					<i class="fa fa-plus-circle"></i>&nbsp;&nbsp;Agregar Banner
			</button>
		</div>
        <div class="col-lg-12">
        
        
		<table class="table table-bordered table-hover" id="table">
			<thead>
                <tr>
                    <th>No</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                    <th>Ciudad</th>
                    <th>Pais</th>
                    <th >Accion</th>
                </tr>
            </thead>
            <tbody>
            </tbody>
 
            <tfoot>
                <tr>
                    <th>No</th>
                    <th>Nombre</th>
                    <th>Apellidos</th>
                    <th>Telefono</th>
                    <th>Direccion</th>
                    <th>Ciudad</th>
                    <th>Pais</th>
                    <th>Accion</th>
                </tr>
            </tfoot>
		</table>
		</div>
	</div>
	<!-- /.box-body -->
	<div class="box-footer">
		<div class="box-tools">
        
            
		</div>
	</div>
	<!-- /.box-footer-->
</div>
<!-- /.box -->
<script>
$(document).ready(function(){
	table = $('#table').DataTable({ 
		 searching: false,
         ordering:  false,
        "info": false,
        "lengthChange": true ,
        "lengthMenu": [[15, 25, 50, -1], [15, 25, 50, "All"]],
        "processing": true, //Feature control the processing indicator.
        "serverSide": true, //Feature control DataTables' server-side processing mode.
        "order": [], //Initial no order.
         
        // Load data for the table's content from an Ajax source
        "ajax": {
            "url": "<?php echo site_url('bo/customer/ajax_list')?>",
            "type": "POST",
            "data": {
                '<?php echo  $csrf['name'];?>': '<?php echo $csrf['hash'];?>' //replace by your name/value
              }
        },
 
        //Set column definition initialisation properties.
        "columnDefs": [
        { 
            "targets": [ 0 ], //first column / numbering column
            "orderable": false, //set not orderable
        },
        ],
        "language":{
            "sProcessing":     "Procesando...",
            "sLengthMenu":     "Mostrar _MENU_ registros",
            "sZeroRecords":    "No se encontraron resultados",
            "sEmptyTable":     "Ningún dato disponible en esta tabla",
            "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
            "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
            "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":    "",
            "sSearch":         "Buscar:",
            "sUrl":            "",
            "sInfoThousands":  ",",
            "sLoadingRecords": "<div style='background:#000'>Cargando...</div>",
            "oPaginate": {
                "sFirst":    "Primero",
                "sLast":     "Último",
                "sNext":     "Siguiente",
                "sPrevious": "Anterior"
            },
            "oAria": {
                "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
                "sSortDescending": ": Activar para ordenar la columna de manera descendente"
            }
        }
    });
	
})
</script>
