<div class="col-xs-2"><label>Id</label></div>
<div class="idUsuario col-lg-2 form-group">
    <input
        type="text"
        placeholder=""
        id="id_usuario"
        name="id_usuario"
        class="form-control "
        maxlength="35"
        value="<?php echo $usuario->user_id ?>"
        readonly="readonly" />

</div>
<div class="clearfix"></div>
<div class="col-lg-2"><label>Nombre</label></div>
<div class="Nombre col-lg-8 form-group">
    <input
        type="text"
        placeholder="Ingrese Nombre"
        id="nombre"
        name="nombre"
        class="form-control"
        maxlength="35"
        value="<?php echo $usuario->user_first_name ?>"
            readonly="readonly" />
        <div class="clearfix"></div>
        

</div>

<div class="clearfix"></div>

<div class="col-lg-2"><label >Email</label></div>
<div class="Email col-lg-8 form-group">
    <input
        type="text"
        placeholder="Ingrese Email"
        id="email"
        name="email"
        maxlength="50"
        class="form-control"
        value="<?php echo $usuario->user_email  ?>" 
            readonly="readonly"/>
    <div class="clearfix"></div>
    
</div>

<div class="clearfix"></div>
<div class="col-lg-2"><label >Usuario</label></div>
<div class="Email col-lg-8 form-group">
    <input
        type="text"
        placeholder="Ingrese Usuario"
        id="usuario"
        name="usuario"
        maxlength="50"
        class="form-control"
        value="<?php echo $usuario->user_name  ?>"
            readonly="readonly" />
        <div class="clearfix"></div>
        
</div>

<div class="clearfix"></div>
    <div class="col-lg-2"><label >Perfil</label></div>
<div class="Password col-lg-8 form-group">
    <input
        type="text"
        id="password"
        name="password"
        class="form-control"
        value="<?php echo $usuario->profile_name ?>"
        maxlength="10" 
            readonly="readonly"/>
    <div class="clearfix"></div>
    
</div>
<div class="clearfix"></div>



<div class="col-lg-2"><label >Estado</label></div>
<div class="Password col-lg-8 form-group">
    <input
        type="text"
        id="password"
        name="password"
        class="form-control"
        value="<?php echo $usuario->user_status==1 ? 'Activo':'Inactivo' ?>"
        maxlength="10" 
            readonly="readonly"/>
    <div class="clearfix"></div>
    
</div>
<div class="clearfix"></div>
