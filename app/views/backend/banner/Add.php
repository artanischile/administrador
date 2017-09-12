<?php  //print_r($bCategorias)?>
<script>
$(document).ready(function(){
    /*$(":file").filestyle({
        buttonText: "",
        buttonName: "btn-primary",
        iconName: "fa fa-upload",
        
    });*/
});
    

</script>
<div class="col-lg-6">
<input type="hidden" name="img" id="img">
	<div class="col-lg-3">
		<label>Titulo</label>
	</div>
	<div class="banner_tittle col-lg-9 form-group">
		<input 
			type="text" 
			placeholder="Titulo del Banner" 
			id="banner_title"
			name="banner_title" 
			class="form-control" 
			maxlength="35"
			value="<?php //echo isset($data['nombre'])? $data['nombre'] : '' ?>" 
		/>
		<div class="clearfix"></div>

	</div>
	<div class="clearfix"></div>
	<div class="col-lg-8 col-lg-offset-2 ms-error  eBanner_title text-danger"></div>
	<div class="clearfix"></div>
   
   <div class="col-lg-3"><label>Tetxto </label></div>
   	<div class="Texto1 col-lg-9 form-group">
		<input 
			type="text" 
			placeholder="Ingrese Texto Banner" 
			id="frase"
			name="frase" class="form-control" 
			maxlength="35"
			value="<?php //echo isset($data['nombre'])? $data['nombre'] : '' ?>" 
		/>
		<div class="clearfix"></div>
	</div>
    
   <!-- Date -->
	
	<div class="col-lg-3">
		<label>Url</label>
	</div>
	<div class="Url col-lg-9 form-group">
		<input 
			type="text" 
			placeholder="Ingrese Url " 
			id="url" 
			name="url"
			class="form-control" 
			maxlength="500"
			value="<?php //echo isset($data['nombre'])? $data['nombre'] : '' ?>" 
		/>
		<div class="clearfix"></div>

	</div>
	<div class="clearfix"></div>
	<div class="col-lg-8 col-lg-offset-2 ms-error  eUrl text-danger"></div>
	<div class="clearfix"></div>

	<div class="col-lg-3">
		<label>Target</label>
	</div>
	<div class="Target col-lg-9 form-group">
		<select class="form-control" id="target" name="target">
			<option  value="">Seleccione Destino</option>
			<option  value="_self">Misma Pagina</option>
			<option  value="_blank">Nueva Pagina</option>
		</select>
		<div class="clearfix"></div>

	</div>
	<div class="clearfix"></div>
	<div class="col-lg-8 col-lg-offset-2 ms-error  eTarget text-danger"></div>
	<div class="clearfix"></div>

	<div class="col-lg-3">
		<label>Fecha Inicio</label>
	</div>
	<div class="FechaInicio col-lg-9 form-group">
		<div class="input-group date">
			<div class="input-group-addon">
				<i class="fa fa-calendar"></i>
			</div>
			<input 
				type="text" 
				class="form-control pull-right" 
				id="inicio"  
				name="fecha_inicio"
			>
		</div>
		<!-- /.input group -->
	</div>
	<div class="clearfix"></div>
	 <!-- Date -->
	<div class="col-lg-3"><label>Fecha Termino</label></div>
	<div class="FechaInicio col-lg-9 form-group">
		<div class="input-group date">
			<div class="input-group-addon">
				<i class="fa fa-calendar"></i>
			</div>
			<input type="text" class="form-control pull-right" id="final" name="fecha_termino">
		</div>
		<!-- /.input group -->
	</div>
	<!-- /.form group -->
    <div class="clearfix"></div>


	<div class="col-lg-3">
		<label>Categoria</label>
	</div>
	<div class="Categoria col-lg-9 form-group">
		<select class="form-control" id="categoria" name="categoria">
			<option value="">Seleccione Categoria</option>
			<?php foreach ( $bCategorias as $categoria):?>
				
				<option 	value="<?php  echo $categoria->id?>"><?php echo $categoria->descripcion ?></option>
			
			<?php endforeach;?>
		</select>
		<div class="clearfix"></div>

	</div>
	<div class="clearfix"></div>
	<div class="col-lg-8 col-lg-offset-2 ms-error  eCategoria  text-danger"></div>
	<div class="clearfix"></div>
     <div class="clearfix"></div>
     <div class="col-lg-3">
		<label>Imagen</label>
	 </div>
     <div class="Url col-lg-9 form-group">
		<input type="file" placeholder="Ingrese Url " id="archivo" name="archivo"	class="form-control" maxlength="500" value="" />
		
	</div>

	

</div>
<div class="clearfix"></div>