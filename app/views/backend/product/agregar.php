<script type="text/javascript">

$(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('descripcion');
    //bootstrap WYSIHTML5 - text editor
   // $(".textarea").wysihtml5();
    //Initialize Select2 Elements
    $(".select2").select2();
  });


</script>
<div class="clearfix"></div>

<div class="col-lg-6">
 <div class="col-lg-2"><label>Codigo</label></div>
                <div class="Codigo col-lg-10 form-group">
                    <input
                        type="text"
                        placeholder="Ingrese Codigo  producto"
                        id="codigo"
                        name="codigo"
                        class="form-control"
                        maxlength="35"
                        value="<?php //echo isset($data['nombre'])? $data['nombre'] : '' ?>" />
                        <div class="clearfix"></div>
                      
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-8 col-lg-offset-2 ms-error  eCodigo text-danger"></div>
                <div class="clearfix"></div>



                <div class="col-lg-2"><label>Nombre</label></div>
                <div class="Producto col-lg-10 form-group">
                    <input
                        type="text"
                        placeholder="Ingrese Nombre producto"
                        id="nombre"
                        name="nombre"
                        class="form-control"
                        maxlength="35"
                        value="<?php //echo isset($data['nombre'])? $data['nombre'] : '' ?>" />
                        <div class="clearfix"></div>
                        
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-8 col-lg-offset-2 ms-error  eNombre  text-danger"></div>
                <div class="clearfix"></div>
				<div class="col-lg-2"><label>Categoria</label></div>
                <div class="Categoria col-lg-10 form-group">
                    <select class="form-control" id="categoria" name="categoria">
                     <option>Seleccione Categoria</option>
                    </select>
                     <div class="clearfix"></div>
                        
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-8 col-lg-offset-2 ms-error  eCategoria  text-danger"></div>
                <div class="clearfix"></div>
                
                <div class="clearfix"></div>
                <div class="col-lg-8 col-lg-offset-2 ms-error  eNombre  text-danger"></div>
                <div class="clearfix"></div>
				<div class="col-lg-2"><label>Sub Categoria</label></div>
                <div class="Subcategoria col-lg-10 form-group">
                    <select class="form-control" id="subcategoria" name="subcategoria">
                     <option>Seleccione Sub Categoria</option>
                    </select>
                     <div class="clearfix"></div>
                        
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-8 col-lg-offset-2 ms-error  eSubcategoria  text-danger"></div>
                <div class="clearfix"></div>


</div> 
<div class="col-lg-6">
 			   <div class="col-lg-2"><label>Medidas</label></div>
                 <div class="form-group">
                        <div class="Medidas col-lg-10 form-group">
                                <select class="form-control select2" multiple="multiple" data-placeholder="Elija Medida" style="width: 100%;">
                                  <option>Alabama</option>
                                  <option>Alaska</option>
                                  <option>California</option>
                                  <option>Delaware</option>
                                  <option>Tennessee</option>
                                  <option>Texas</option>
                                  <option>Washington</option>
                                </select>
                      </div>             
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-8 col-lg-offset-2 ms-error  eMedidas  text-danger"></div>
                <div class="clearfix"></div>
                
                 <div class="col-lg-2"><label>Colores</label></div>
                 <div class="form-group">
                        <div class="Medidas col-lg-10 form-group">
                                <select class="form-control select2" multiple="multiple" data-placeholder="Elija Color" style="width: 100%;">
                                  <option>Alabama</option>
                                  <option>Alaska</option>
                                  <option>California</option>
                                  <option>Delaware</option>
                                  <option>Tennessee</option>
                                  <option>Texas</option>
                                  <option>Washington</option>
                                </select>
                      </div>             
                </div>
                
                 <div class="clearfix"></div>
                <div class="col-lg-8 col-lg-offset-2 ms-error  eColores text-danger"></div>
                <div class="clearfix"></div>
                
                 <div class="col-lg-2"><label>Valor</label></div>
                 <div class="form-group">
                        <div class="Valor col-lg-10 form-group">
                             <input
                                type="text"
                                placeholder="Ingrese Valor  producto"
                                id="nombre"
                                name="nombre"
                                class="form-control"
                                maxlength="35"
                                value="<?php //echo isset($data['nombre'])? $data['nombre'] : '' ?>" />
                                <div class="clearfix"></div>
                      </div>             
                </div>
                
                 <div class="col-lg-2"><label>Imagen</label></div>
                 <div class="form-group">
                        <div class="Valor col-lg-10 form-group">
                           <div class="input-group input-group-sm">
                        	<input class="form-control" type="text">
                        	<span class="input-group-btn">
                        	  <button type="button" class="btn btn-info btn-flat"><i class="fa fa-upload" aria-hidden="true"></i></button>
                        	</span>
                        </div>
                                <div class="clearfix"></div>
                      </div>             
                </div>
                
                
</div>  
  <div class="col-lg-12">
	<div class="col-lg-2"><label>Caracteristicas</label></div>
        <div class="Caracteristicas col-lg-10 form-group">
            <textarea id="descripcion" name="descripcion" rows="5" cols="80"></textarea>
            <div class="clearfix"></div>
        </div>
        <div class="clearfix"></div>
        <div class="col-lg-8 col-lg-offset-2 ms-error  eCaracteristicas text-danger"></div>
        <div class="clearfix"></div>
</div>
<div class="clearfix"></div>	

  