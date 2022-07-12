

<br>

<div class="col-md-12">
                <!-- USERS LIST -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Familiares</h3>
                    <div class="card-tools">
                      <button type="button" class="btn btn-tool" data-card-widget="collapse">
                        <i class="fas fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-tool" data-card-widget="remove">
                        <i class="fas fa-times"></i>
                      </button>
                    </div>
                  </div>
                  <?php
                  $c=$_SESSION['codi'];
                  $sql = "SELECT * FROM Paciente P, Famila F, PaciFami PF where P.NumPaci=PF.NumPaci and F.CodFami=PF.CodFami and P.NumPaci='$c'";
                  mysql_free_result($res);
                  $res=$lig->query($sql); //a utilizar no while

                  while ($lin=$res->fetch_array()){ ?>
                  <!-- /.card-header -->
                  <div class="card-body p-0">
                    <ul class="users-list clearfix">
                      <li>
                        <img src="<?php echo $lin['FotoFami']; ?>" alt="User Image" width="100" height="150">
                        <a class="users-list-name" href="#"><?php echo $lin['NomeFami']; ?></a>
                        <a href="index.php?cmd=del-fami-paci&cod=<?php echo$lin['CodFami'];?>">Apagar</a>
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

              <div class="card">
              <div class="card-header">
                <h3 class="card-title">Adicionar Familiar</h3>
              </div>
            
              <form method="POST" action="index.php?cmd=ins-fami-paci">

             
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="LoginFami" name="LoginFami" placeholder="Enter email">
                  </div>
                      

                     <!--
                  <div class="form-group">
                  <br>
                  <div class="col-sm-4"> 
                <select class="form-control" name="CodFami">
                <?php /*
                $sql="select * from Famila";
                  $res=$lig->query($sql);
                  while($lin=$res->fetch_array())
                  {
                    echo "<option value=",$lin['CodFami'],">",$lin['NomeFami'],"</option>";
                  }
                  echo "</select>";
                  */
                ?>
                  </div>
                </div>
                -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </div>

               
              </form>
            </div>
                </div>
            
