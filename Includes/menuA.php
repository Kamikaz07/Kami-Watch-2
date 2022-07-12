

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
      
      
    </ul>

  
    
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->

      <li class="nav-item">
          <!--<button type="button" class="btn btn-block btn-secondary" --><a href="index.php?cmd=logout" class="nav-link">Logout</a>
    
        </li>
        
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
    if($_SESSION['tipo']==1)
      $nivel='Admin';
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
            <a href="index.php?cmd=DashboardA" class="nav-link">
              <i class="fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
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
            <a href="index.php?cmd=paci_list" class="nav-link">
            <i class="far fa-user"></i>
              <p>
                User List
                
              </p>
            </a>
          </li>

          
          
          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-briefcase"></i>
              <p>
              BackOffice
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="#" class="nav-link ">
            <i class="far fa-address-card"></i>
              <p>
                 Utilizador
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?cmd=add-uti" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Adicionar Utilizador</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?cmd=list-uti" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listar Utilizadores</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-user-tag"></i>
              <p>
                 Tipo Utilizador
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?cmd=add-tputi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Adicionar Tipo Utilizador</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?cmd=list-tputi" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listar Tipo Utilizadores</p>
                </a>
              </li>
            </ul>
          </li>

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

          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-user-alt"></i>
              <p>
                 Paciente
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?cmd=add-paci" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Adicionar Paciente</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?cmd=list-paci" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listar Pacientes</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-users"></i>
              <p>
                 Familia
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?cmd=add-fami" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Adicionar Familia</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?cmd=list-fami" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listar Familia</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
           
            <i class="fas fa-users user-alt"></i>
              <p>
                Paciente - Familia
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?cmd=add-fami-paci" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Adicionar Paciente-Familia</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?cmd=list-fami-paci" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listar Paciente-Familia</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-stethoscope"></i>
              <p>
                 Dados Biometricos
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?cmd=add-db" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Adicionar Dados Biometricos</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?cmd=list-db" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listar Dados Biometricos</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-exclamation-triangle"></i>
              <p>
                 Dados Emergencia
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?cmd=add-de" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Adicionar Dados Emergencia</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?cmd=list-de" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listar Dados Emergencia</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="far fa-building"></i>
              <p>
                 Empresa
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?cmd=add-empresa" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Adicionar Empresa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?cmd=list-empresa" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listar Empresa</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-box-open"></i>
              <p>
                 Produto
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?cmd=add-prod" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Adicionar Produto</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?cmd=list-prod" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listar Produto</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-swatchbook"></i>
              <p>
                 Tipo Produto
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?cmd=add-tpprod" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Adicionar Tipo Produto</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?cmd=list-tpprod" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listar Tipo Produto</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="fas fa-magic"></i>
              <p>
              Tipo Material
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?cmd=add-TipoMaterial" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Adicionar Tipo Material</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?cmd=list-TipoMaterial" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listar Tipo Material</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link">
            <i class="far fa-images"></i>
              <p>
                 Imagem
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="index.php?cmd=add-Img" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Adicionar Imagem</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="index.php?cmd=list-Img" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Listar Imagem</p>
                </a>
              </li>
            </ul>
          </li>
</li>

        </ul>

        <li class="nav-header">MISCELLANEOUS</li>
          <li class="nav-item">
            <a href="index.php?cmd=iframe" class="nav-link">
              <i class="fas fa-ellipsis-h"></i>
              <p>iFrame Plugin</p>
            </a>
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
