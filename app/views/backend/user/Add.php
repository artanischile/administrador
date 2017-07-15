
<script type="text/javascript">

$(document).ready(function(){
	
	
	$('#nombre, #email').on('input',function(e){

	      if( !$(this).val()==""){
                 
	      }
		
	     
    });
	

});


</script>



<?php 


$err="";
$data="";

?>




    <div class="box-body table-responsive no-padding">
            <div class="clearfix"></div>
            <div class="col-lg-12" style="padding-top: 15px">
     
                <div class="col-lg-2"><label>Nombre</label></div>
                <div class="Nombre col-lg-10 form-group">
                    <input
                        type="text"
                        placeholder="Ingrese Nombre"
                        id="nombre"
                        name="nombre"
                        class="form-control"
                        maxlength="35"
                        value="<?php echo isset($data['nombre'])? $data['nombre'] : '' ?>" />
                        <div class="clearfix"></div>
                        
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-8 col-lg-offset-2 ms-error  eNombre  text-danger"></div>
                <div class="clearfix"></div>

                <div class="col-lg-2"><label >Email</label></div>
                <div class="Email col-lg-10 form-group">
                    <input
                        type="text"
                        placeholder="Ingrese Email"
                        id="email"
                        name="email"
                        maxlength="50"
                        class="form-control"
                        value="<?php echo isset($data['email'])? $data['email'] :'' ?>" />
                    <div class="clearfix"></div>
                   
                </div>

				<div class="clearfix"></div>
                <div class="col-lg-8 col-lg-offset-2 ms-error  eEmail  text-danger"></div>
                <div class="clearfix"></div>
                
                <div class="col-lg-2"><label >Usuario</label></div>
                <div class="Usuario col-lg-10 form-group">
                    <input
                        type="text"
                        placeholder="Ingrese Usuario"
                        id="usuario"
                        name="usuario"
                        maxlength="50"
                        class="form-control"
                        value="<?php echo isset($data['usuario'])? $data['usuario'] :''  ?>" />
                        <div class="clearfix"></div>
                  
                </div>
				<div class="clearfix"></div>
                <div class="col-lg-8 col-lg-offset-2 ms-error  eUsuario text-danger"></div>
                <div class="clearfix"></div>
                
                <div class="col-lg-2"><label >Password</label></div>
                <div class="Password col-lg-10 form-group">
                    <input
                        type="password"
                        placeholder="Ingrese Password"
                        id="password"
                        name="password"
                        class="form-control"
                        value="<?php echo isset($data['password'])? $this->enc->decode($data['password']) :'' ?>"
                        maxlength="10" />
                    <div class="clearfix"></div>
                   
                </div>
               <div class="clearfix"></div>
                <div class="col-lg-8 col-lg-offset-2 ms-error  ePassword text-danger"></div>
                <div class="clearfix"></div>

                <div class="col-lg-2"><label >Perfil</label></div>
                <div class="Perfil col-lg-10 form-group">
                    <select class="form-control" id="perfil" name="perfil">
                        <option value=""  >Seleccione</option>
                        <?php foreach ($perfiles as $perfil):?>
                            <option value="<?php echo $perfil->id?>"  <?php  //echo   $perfil->id==$data['perfil'] ? 'selected' :  ''    ?> ><?php echo $perfil->descripcion?></option>
                        <?php endforeach;?>
                    </select>
                    <div class="clearfix"></div>
            
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-8 col-lg-offset-2 ms-error  ePerfil text-danger"></div>
                <div class="clearfix"></div>

                <div class="col-lg-2"><label >Estado</label></div>
                <div class="Estado col-lg-10 form-group">
                    <select class="form-control" id="estado" name="estado">
                        <option value=""  <?php //if ($data['estado']=="") echo "selected"  ?>>Seleccione</option>
                        <option value="1" <?php  //echo   $data['estado']=="1" ? 'selected' :  ''    ?>>Activo</option>
                        <option value="2" <?php  //echo   $data['estado']=="2" ? 'selected' :  ''    ?>>Inactivo</option>
                    </select>
                    <div class="clearfix"></div>
                    
                </div>
                 <div class="clearfix"></div>
                <div class="col-lg-8 col-lg-offset-2 ms-error  eEstado text-danger"></div>
                <div class="clearfix"></div>
            </div>
			  <div class="clearfix"></div>
                <div id="msg-error" class="text-red" style="text-align: center; font-size: 16px; display: none;" ></div>
                <div class="clearfix"></div>
    




