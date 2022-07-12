

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/LOGO.jpg" alt="Logo" height="70" width="70">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.php?cmd=home" class="nav-link">Home</a>
      </li>
      <li class="nav-item dropdown">
            <a id="dropdownSubMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Tipo Utilizador</a>
            <ul aria-labelledby="dropdownSubMenu1" class="dropdown-menu border-0 shadow">
              <li><a href="" class="dropdown-item" data-toggle="modal" data-target="#modal-default">Paciente</a></li>

              
            </ul>
          </li>
    </ul>
  
    
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->

       
      <li class="nav-item">
          <!--<button type="button" class="btn btn-block btn-secondary" --><a href="index.php?cmd=logout" class="nav-link">Logout</a>
    
        </li>
    </ul>
    </nav>


   
  <!-- /.navbar ------------------------------------------------------------------------------------------>
  
  <!-- Main Sidebar Container ---------------------------------------------------------------------------->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index.php?cmd=home" class="brand-link">
      <img src="dist/img/LOGO.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">KamiWatch</span>
    </a>

    <?php
    if($_SESSION['tipo']==5)
      $nivel='Familia';
    ?>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="user-block">
          <img src="<?php echo $_SESSION['foto']?> " class="img-circle " alt="User Image">
        </div>
        <div class="info">
          <a href="index.php?cmd=perfil" class="d-block"><?php echo $_SESSION['nome']?></a>
        </div>
        <div class="info">
        <button type="button" class="btn btn-block btn-primary btn-sm"><?php echo $nivel;?></button>
      </div>
      </div>
 <!-- SidebarSearch Form -->
 <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="true">

       
          <li class="nav-item">
            <a href="index.php?cmd=DashboardF" class="nav-link">
              <i class="fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="index.php?cmd=chart" class="nav-link">
            <i class="far fa-chart-bar"></i>
              <p>
                Dados Biometricos 
                
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="index.php?cmd=map" class="nav-link">
            <i class="far fa-map"></i>
              <p>
                Mapa
                
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="index.php?cmd=paci" class="nav-link">
            <i class="fas fa-users"></i>
              <p>
                Pacientes
                
              </p>
            </a>
          </li>
           
        </ul>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<!-- - - - - - - - - - -- - - - - - - ----------------------------------------------------->
<?php
    $c=$_SESSION['codi'];
	$s="select * from DadosBiometricos DB, Paciente P, PaciFami PF, ParametosMedicos PM where PF.NumPaci=DB.NumPaci and P.NumPaci=PF.NumPaci and PM.NumPaci=P.NumPaci and CodFami='$c'";
	$res=$lig->query($s);
	while ($lin=$res->fetch_array()){
  


  if(($lin['FreqCard']<=$lin['FreqCardMin'])||($lin['FreqCard']>=$lin['FreqCardMax']) ) {
    //echo $lin['FreqCard'];}
   echo '<script type="text/javascript">$(function(){
    
     $("#modal-alerta").modal("show");
   });
   </script>';    
 }else{
   echo '<script type="text/javascript">$(function(){
    
     $("#modal-alerta").modal("hide");
   });
   </script>';  
 }

 if(($lin['OxigSang']<=$lin['OxigSangMin'])||($lin['OxigSang']>=$lin['OxigSangMax']) ) {
   //echo $lin['FreqCard'];}
  echo '<script type="text/javascript">$(function(){
   
    $("#modal-alerta").modal("show");
  });
  </script>';    
}else{
  echo '<script type="text/javascript">$(function(){
   
    $("#modal-alerta").modal("hide");
  });
  </script>';  
}

if(($lin['Tempera']<=$lin['TemperaMin'])||($lin['Tempera']>=$lin['TemperaMax']) ) {
 //echo $lin['FreqCard'];}
echo '<script type="text/javascript">$(function(){
 
  $("#modal-alerta").modal("show");
});
</script>';    
}else{
echo '<script type="text/javascript">$(function(){
 
  $("#modal-alerta").modal("hide");
});
</script>';  
}

  }
    
?>



  
  <div class="modal fade" id="modal-default">
    <div class="modal-dialog">
      <div class="modal-content">
        
        <div class="modal-header">
          <h4 class="modal-title">Login</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        
        <div class="modal-body">
            
              <!-- /.login-logo -->
              <div class="card card-outline card-primary">
                <div class="card-header text-center">
                  <a class="h1"><b>Kami</b>Watch</a>
                </div>
                <div class="card-body">
                  <p class="login-box-msg">Sign in to start your session</p>
            
                  <form action="index.php?cmd=login" method="POST">

                    <div class="input-group mb-3">
                      <input type="email" class="form-control" placeholder="Email" name = "LoginUti">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-envelope"></span>
                        </div>
                      </div>
                    </div>

                    <div class="input-group mb-3">
                      <input type="password" class="form-control" placeholder="Password" name = "PasswdUti">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-lock"></span>
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-8">
                        <div class="icheck-primary">
                          <input type="checkbox" id="remember">
                          <label for="remember">
                            Remember Me
                          </label>
                        </div>
                      </div>
                      <!-- /.col -->
                      <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                       <!-- <button type="button" class="btn btn-success toastrDefaultSuccess"> -->
                      </div>
                      <!-- /.col -->
                    </div>
                  </form>
                  <br>
            
                  <div class="social-auth-links text-center mt-2 mb-3">
                    <a href="#" class="btn btn-block btn-primary">
                      <i class="fab fa-google mr-2"></i> Sign in using Google
                    </a>
                  </div>
                  <!-- /.social-auth-links -->
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
           </div>


        </div>
      <!-- /.modal-content -->
     </div>
    <!-- /.modal-dialog -->
  </div>
  <!-- /.modal -->

<!------------------------------------------------------------------------------------------------------------------------------------------->


<div class="modal fade" id="modal-alerta">
        <div class="modal-dialog modal-lg">
          <div class="modal-content bg-danger">
            <div class="modal-header">
              <h4 class="modal-title">ALERTA!!</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <?php 
                $c=$_SESSION['codi'];
                $s="select * from DadosBiometricos DB, Paciente P, PaciFami PF, ParametosMedicos PM where PF.NumPaci=DB.NumPaci and P.NumPaci=PF.NumPaci and PM.NumPaci=P.NumPaci and CodFami='$c' order by DB.DataDB desc ";
                $res=$lig->query($s);
                $lin=$res->fetch_array();
            echo "Nome - ".$lin['NomePaci'];
            echo "<br>";
            echo "Frequencia - ".$lin['FreqCard'];
            echo "<br>";
            echo "Oxigenação - ".$lin['OxigSang'];
            echo "<br>";
            echo "Temperatura - ".$lin['Tempera'];
            echo "<br>";
            include_once('./maps/2.php'); 
            echo "<br>";

                ?>
            </div>
            <div class="modal-footer justify-content-between">
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
 
  <!------------------------------------------------------------------------------------------------------------------------------------>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="/plugins/moment/moment.min.js"></script>
<script src="/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="/dist/js/pages/dashboard.js"></script>
 <!-- bs-custom-file-input -->
 <script src="./plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- InputMask -->
<script src="./plugins/moment/moment.min.js"></script>
<script src="./plugins/inputmask/jquery.inputmask.min.js"></script>



<script>
$(function () {
  bsCustomFileInput.init();
});

 
  
</script>
 
</body>
</html>
