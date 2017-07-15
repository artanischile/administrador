<div class="row">
    <div class="col-md-3">

        <!-- Profile Image -->
        <div class="box box-primary">
            <div class="box-body box-profile">

                <img class="profile-user-img img-responsive img-circle" src="<?php echo BASE_THEME?>dist/img/user2-160x160.jpg" alt="User profile picture">

                <h3 class="profile-username text-center"><?php echo  ucfirst($this->session->userdata('username'))?></h3>

                <p class="text-muted text-center"><?php echo  ucfirst($this->session->userdata('userprofile'))?></p>

             

                <!--<a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>-->
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->

    </div>
    <!-- /.col -->
    <div class="col-md-9">
        <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
                <li class="active"><a href="#activity" data-toggle="tab">Actividad</a></li>
                <li><a href="#timeline" data-toggle="tab">Cambio Contrase&ntilde;a</a></li>
                <li><a href="#settings" data-toggle="tab">Datos</a></li>
            </ul>
            <div class="tab-content">
                <div class="active tab-pane" id="activity">
                    
                </div>
                <!-- /.tab-pane -->
                <div class="tab-pane" id="timeline">
                   <div class="row">
						   <div class="col-lg-12">
							  <form method="post" id="frmReset"> 
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
							  </form>
						 </div>
				  </div>		 	     
                </div>
                <!-- /.tab-pane -->

                <div class="tab-pane" id="settings">
                    <form class="form-horizontal">
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Name</label>

                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputName" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputName" class="col-sm-2 control-label">Name</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputName" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                            <div class="col-sm-10">
                                <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <button type="submit" class="btn btn-danger">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
        </div>
        <!-- /.nav-tabs-custom -->
    </div>
    <!-- /.col -->
</div>
<!-- /.row -->
