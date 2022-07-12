
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
  
  </ul>

  
  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
    <!-- Navbar Search -->

 
    <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search"  role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline" method="POST" action="index.php?cmd=med">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" name="LoginPaci" id="LoginPaci" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

    <li class="nav-item">
          <!--<button type="button" class="btn btn-block btn-secondary" --><a href="index.php?cmd=logout" class="nav-link">Logout</a>
    
        </li>
  </ul>
  </nav>


 
<!-- /.navbar ------------------------------------------------------------------------------------------>

<!-- Main Sidebar Container ---------------------------------------------------------------------------->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="home.html" class="brand-link">
    <img src="dist/img/LOGO.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">KamiWatch</span>
  </a>

  <?php
if($_SESSION['tipo']==2)
$nivel='Medico';
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

       
        
            <a href="index.php?cmd=med" class="nav-link">
              <i class="nav-icon fas fa-stethoscope"></i>
              <p>
              Medico
              
              </p>
            </a>
         
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-briefcase-medical"></i>
              <p>
                 Parametros Medicos
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?cmd=add-pm" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Adicionar Parametros Medicos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?cmd=list-pm" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listar Parametros Medicos</p>
                </a>
              </li>
            </ul>
          </li>

         
  
     
        

         


          

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<!-- - - - - - - - - - -- - - - - - - ----------------------------------------------------->
  


  <!----------------------------------------------------------------------------------------------------------->



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
</body>
</html>
