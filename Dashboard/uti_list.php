

<div class="col-md-12">
                <!-- USERS LIST -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Last - <a href="index.php?cmd=list-paci">Pacientes</a></h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <ul class="users-list clearfix">
                    <?php
                        $sql="select * from Paciente ORDER BY NumPaci DESC limit 4";
                        mysql_free_result($res);
                        $res=$lig->query($sql); //a utilizar no while

                        while ($lin=$res->fetch_array()){ ?>
                      <li>
                        <img src="<?php echo $lin['FotoPaci']; ?>" alt="User Image" width="150" height="100">
                        <a class="users-list-name" href="#"><?php echo $lin['NomePaci']; ?></a>
                      </li>
                      <?php } ?> 
                    </ul>
                    <!-- /.users-list -->
                  </div>
                  <!-- /.card-body -->
                
                  <!-- /.card-footer -->
                </div>
                <!--/.card -->
              </div>
              <!-- /.col -->
                         

              
                <div class="col-md-12">
                <!-- USERS LIST -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Last - <a href="index.php?cmd=list-fami">Familiares</a></h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <ul class="users-list clearfix">
                    <?php
                        $sql="select * from Famila ORDER BY CodFami DESC limit 4";
                        mysql_free_result($res);
                        $res=$lig->query($sql); //a utilizar no while

                        while ($lin=$res->fetch_array()){ ?>
                      <li>
                        <img src="<?php echo $lin['FotoFami']; ?>" alt="User Image" width="150" height="100">
                        <a class="users-list-name" href="#"><?php echo $lin['NomeFami']; ?></a>
                      </li>
                      <?php } ?> 
                    </ul>
                    <!-- /.users-list -->
                  </div>
                  <!-- /.card-body -->
                
                  <!-- /.card-footer -->
                </div>
                <!--/.card -->
              </div>
              <!-- /.col -->



              <div class="col-md-12">
                <!-- USERS LIST -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Last - <a href="index.php?cmd=list-uti">Utilizadores</a></h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <ul class="users-list clearfix">
                    <?php
                        $sql="select * from  Utilizador U, TipoUtilizador TU where U.CodTputi=TU.CodTputi ORDER BY NumUti DESC limit 4";
                        mysql_free_result($res);
                        $res=$lig->query($sql); //a utilizar no while

                        while ($lin=$res->fetch_array()){ ?>
                      <li>
                        <img src="<?php echo $lin['FotoUti']; ?>" width="150" height="100">
                        <a class="users-list-name" href="#"><?php echo $lin['NomeUti']; ?></a>
                        <button type="button" class="btn btn-block btn-default btn-xs"><?php echo $lin['Dsgtu']; ?></button>
                      </li>
                      <?php } ?> 
                    </ul>
                    <!-- /.users-list -->
                  </div>
                  <!-- /.card-body -->
                
                  <!-- /.card-footer -->
                </div>
                <!--/.card -->
              </div>
              <!-- /.col -->


              <!--
              <div class="tab-pane" id="activity">
                  <form enctype="multipart/form-data" class="form-horizontal" method="POST" action="index.php?cmd=upd-temp">
                  <div class="form-group row">
                        <label for="inputFoto" class="col-sm-2 col-form-label">Foto</label>
                        <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile" name = "FotoUti">
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
                        -->