<?php
$c=$_SESSION['codi'];
$sql = "SELECT * FROM Paciente P, Famila F, PaciFami PF where P.NumPaci=PF.NumPaci and F.CodFami=PF.CodFami and F.CodFami='$c'";
$res=$lig->query($sql);
if ($res->num_rows == 1) { // Encontrou apenas 1 utilizador
	$lin = $res->fetch_array();
}
?>



<div class="col-md-12">
                <!-- USERS LIST -->
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Pacientes</h3>
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
                      <li>
                        <img src="<?php echo $lin['FotoPaci']; ?>" alt="User Image" width="120" height="100">
                        <a class="users-list-name" href="#"><?php echo $lin['NomePaci']; ?></a>
                      </li>
                    </ul>
                    <!-- /.users-list -->
                  </div>
                  <!-- /.card-body -->
                
                  <!-- /.card-footer -->
                </div>
                <!--/.card -->
              </div>
              <!-- /.col -->