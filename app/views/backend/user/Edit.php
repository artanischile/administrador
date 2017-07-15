
                <div class="col-xs-2"><label>Id</label></div>
                <div class="idUsuario col-lg-2 form-group">
                    <input
                        type="text"
                        placeholder=""
                        id="id_usuario"
                        name="id_usuario"
                        class="form-control "
                        maxlength="35"
                        value="<?php echo $usuario->id  ?>"
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
                        value="<?php echo $usuario->nombre ?>" />
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
                        value="<?php echo $usuario->email  ?>" />
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
                        value="<?php echo $usuario->usuario  ?>" />
                        <div class="clearfix"></div>
                      
                </div>

                <div class="clearfix"></div>
                <div class="col-lg-2"><label >Password</label></div>
                <div class="Password col-lg-8 form-group">
                    <input
                        type="password"
                        placeholder="Ingrese Password"
                        id="password"
                        name="password"
                        class="form-control"
                        value="<?php echo $this->enc->decode($usuario->password) ?>"
                        maxlength="10" />
                    <div class="clearfix"></div>
                    
                </div>
                <div class="clearfix"></div>


                <div class="clearfix"></div>
                <div class="col-lg-2"><label >Perfil</label></div>
                <div class="Estado col-lg-8 form-group">
                    <select class="form-control" id="perfil" name="perfil">
                        <option value=""  >Seleccione</option>
                        <?php foreach ($perfiles as $perfil):?>
                            <option value="<?php echo $perfil->id?>"  <?php  echo   $perfil->id==$usuario->perfil? 'selected' :  ''    ?> ><?php echo $perfil->descripcion?></option>
                        <?php endforeach;?>
                    </select>
                    <div class="clearfix"></div>
                    
                </div>
                <div class="clearfix"></div>

                <div class="col-lg-2"><label >Estado</label></div>
                <div class="Estado col-lg-8 form-group">
                    <select class="form-control" id="estado" name="estado">
                        <option value=""  <?php echo   $usuario->estado=="" ? 'selected' :  ''    ?>>Seleccione</option>
                        <option value="1" <?php  echo   $usuario->estado=="1" ? 'selected' :  ''    ?>>Activo</option>
                        <option value="2" <?php  echo   $usuario->estado=="2" ? 'selected' :  ''    ?>>Inactivo</option>
                    </select>
                    <div class="clearfix"></div>
                    
                </div>
                <div class="clearfix"></div>
                <div id="msg-error" class="text-red" style="text-align: center; font-size: 16px; display: none;" ></div>
                <div class="clearfix"></div>
    



   


