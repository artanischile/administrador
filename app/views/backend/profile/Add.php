<?php 
    $err="";
    $data="";
?>

<div class="box-body table-responsive no-padding">
    <div class="clearfix"></div>
    <div class="col-lg-12" style="padding-top: 15px">
        <div class="col-lg-2"><label>Descripcion</label></div>
        <div class="Nombre col-lg-10 form-group">
                    <input
                        type="text"
                        placeholder="Ingrese Nombre"
                        id="profile_name"
                        name="profile_name"
                        class="form-control"
                        maxlength="35"
                        value="<?php echo isset($data['profile_name'])? $data['profile_name'] : '' ?>" />
                        <div class="clearfix"></div>
                        
        </div>

        <div class="col-lg-2"><label >Estado</label></div>
                <div class="Estado col-lg-10 form-group">
                    <select class="form-control" id="profile_status" name="profile_status">
                        <option value=""  >Seleccione</option>
                        <option value="1" >Activo</option>
                        <option value="2" >Inactivo</option>
                    </select>
                    <div class="clearfix"></div>
                    
        </div>






    </div>
</div>