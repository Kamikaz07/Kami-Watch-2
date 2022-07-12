<!DOCTYPE html>

<?php 
	$c=$_SESSION['codi'];
	$sql="select * from Famila where CodFami = $c";
  $res=$lig->query($sql);
	$lin=$res->fetch_array();

    if($_SESSION['tipo']==1)
      $nivel='Admin';
      elseif($_SESSION['tipo']==2)
      $nivel='Medico';
      elseif($_SESSION['tipo']==4)
      $nivel='Paciente';
      elseif($_SESSION['tipo']==5)
      $nivel='Familia';
    else
      $nivel='Utilizador';

    ?>
 
  <br>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Profile</h3>
              </div>
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid "
                       src="<?php echo $_SESSION['foto']?>"
                       alt="User Image">
                </div>

                <h3 class="profile-username text-center"><?php echo $lin['NomeFami'];?></h3>

                <p class="text-muted text-center"><?php echo $nivel;?></p>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i> Education</strong>

                <p class="text-muted">
                  --
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">--</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">--</span>
                  <span class="tag tag-success">--</span>
                  <span class="tag tag-info">--</span>
                  <span class="tag tag-warning">--</span>
                  <span class="tag tag-primary">--</span>
                </p>

                <hr>

                <strong><i class="far fa-file-alt mr-1"></i> Notes</strong>

                <p class="text-muted">--</p>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->

          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#settings" data-toggle="tab">Alterar Perfil</a></li>
                  <li class="nav-item"><a class="nav-link " href="#activity" data-toggle="tab">Alterar Foto</a></li>
                  <li class="nav-item"><a class="nav-link" href="#timeline" data-toggle="tab">Alterar Password</a></li>
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="tab-pane" id="activity">
                  <form enctype="multipart/form-data" class="form-horizontal" method="POST" action="index.php?cmd=upd-img&cod=<?php echo $c;?>">
                  <div class="form-group row">
                        <label for="inputFoto" class="col-sm-2 col-form-label">Foto</label>
                        <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile" name = "FotoFami">
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Alterar</button>
                        </div>
                      </div>
                  </form>
                  </div>
                  <!-- /.tab-pane -->


                  <div class="tab-pane" id="timeline">
                  <form class="form-horizontal" method="POST" action="index.php?cmd=upd-pass">
                  <div class="form-group row">
                        <label for="inputName2" class="col-sm-3 col-form-label">Password Antiga</label>
                        <div class="col-sm-10">
                          <input type="Password" class="form-control" id="PasswdFami1" placeholder="Password Antiga" name="PasswdFami1" onkeyup="return validaCPass2();">
                        </div>
                        <span class="msg-cpass1"></span>
                  </div>
                  <span class="msg-pass"></span>
                  <div class="form-group row">
                        <label for="inputName2" class="col-sm-3 col-form-label">Nova Password</label>
                        <div class="col-sm-10">
                          <input type="Password" class="form-control" id="PasswdFami" placeholder="Password Atual" name="PasswdFami"    onkeyup="return validaCPass2();" onkeyup="return validaPass(this);" onblur="return validaCPass();">
                        </div>
                        <span class="msg-pass"></span>
                        <span class="msg-cpass"></span>
                        <span class="msg-cpass1"></span>
                  </div>
                  

                  <div class="form-group row">
                        <label for="inputName2" class="col-sm-3 col-form-label">Confirmar Password</label>
                        <div class="col-sm-10">
                          <input type="Password" class="form-control" id="PasswdFami2" placeholder="Confirmar Password" name="PasswdFami2" onkeyup="return validaCPass();">
                        </div>
                        <span class="msg-cpass"></span>
                  </div>
                  

                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Alterar</button>
                        </div>
                      </div>
                  </form>
                  </div>
                  <!-- /.tab-pane -->

                  <div class="active tab-pane" id="settings">
                  <form class="form-horizontal" method="POST" action="index.php?cmd=upd-uti&cod=<?php echo $c;?>">
                      <div class="form-group row">
                        <label for="inputEmail" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-10">
                          <input type="email" class="form-control" id="inputEmail" placeholder="Email" name="LoginFami" value="<?php echo $lin['LoginFami'];?>" disabled>
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputName2" class="col-sm-3 col-form-label">Nome</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputName2" placeholder="Nome" name="NomeFami" value="<?php echo $lin['NomeFami'];?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-3 col-form-label">Observações</label>
                        <div class="col-sm-10">
                          <input type="text" class="form-control" id="inputExperience" placeholder="Observações" name="ObservervacaoFami" value="<?php echo $lin['ObservervacaoFami'];?>">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-3 col-form-label">Data de Nascimento</label>
                        <div class="col-sm-10">
                        <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" placeholder="dd/mm/yyyy" data-mask name="DataNascFami" value="<?php echo $lin['DataNascFami'];?>" disabled>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Alterar</button>
                        </div>
                      </div>
                    </form>
                  </div>
                  <!-- /.tab-pane -->
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
      </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>

    <script type="text/javascript" src="Login/validacoes/validacao.js"></script>
    <!--
  "
   
-->