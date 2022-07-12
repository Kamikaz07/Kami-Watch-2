<style>
	.erro{
		color: red;
	}
	.msg-erro {
		color: red;
	}
</style>


<meta name="viewport" content="width=device-width, initial-scale=1">


<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/LOGO.jpg" alt="Logo" height="300">
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
        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
          Login
        </button>
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
  
      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <br>
  
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
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
  
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>
  
  <!-- - - - - - - - - - -- - - - - - - ----------------------------------------------------->
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
            
                  <form action="index.php?cmd=login" method="POST" onsubmit="return validaLogin();">

                    <div class="input-group mb-3">
                      <input type="email" class="form-control" id="lusrname" placeholder="Email" name = "LoginUti">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-envelope"></span>
                        </div>
                      </div>
                    </div>

                    <div class="input-group mb-3">
                      <input type="password" class="form-control" id="lpsw" placeholder="Password" name = "PasswdUti">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <span class="fas fa-lock"></span>
                        </div>
                      </div>
                    </div>
                    <div class="erro" id="loginvalida" color="red"></div>

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
            
                  <p class="mb-1">
                    <a data-toggle="modal" data-target="#modal-passwd" data-dismiss="modal" class="text-center">I forgot my password</a>
                   <!-- <a href="index.php?cmd=forgot-pass">I forgot my password</a> -->
                  </p>
                  <p class="mb-0">
                    <a data-toggle="modal" data-target="#modal-register" data-dismiss="modal" class="text-center">Register a new membership</a>
                  </p>
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



  <!-- Register -->
  <div class="modal fade" id="modal-register">
    <div class="modal-dialog">
      <div class="modal-content">
        
        <div class="modal-header">
          <h4 class="modal-title">Register</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
      <div class="card card-outline card-primary">
        <div class="card-header text-center">
          <a class="h1"><b>Kami</b>Watch</a>
        </div>
        <div class="card-body">
          <p class="login-box-msg">Register a new membership</p>
    
          <form enctype="multipart/form-data" action="index.php?cmd=ins-resg" method="post">
            <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Full name" name="NomeUti" required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-user"></span>
                </div>
              </div>
            </div>
            <span class="msg-nome"></span>

            <div class="input-group mb-3">
              <input type="email" class="form-control" placeholder="Email" id="remail" name="LoginUti" onkeyup="return validaMail(this);" required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <span class='msg-erro msg-email'></span>
			  <div class="erro" id="txtmail" color="red"></div>
            


            <div class="input-group mb-3">
              <input type="password" class="form-control " placeholder="Password" id="rpsw" name="PasswdUti"  onkeyup="return validaPass(this);" onblur="return validaCPass();" required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <span class='msg-erro msg-pass'></span>
            
            <div class="input-group mb-3">
              <input type="password" class="form-control" placeholder="Retype password" id="rcpsw" name="cpassword" onkeyup="validaCPass();" required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-lock"></span>
                </div>
              </div>
            </div>
            <span class='msg-erro msg-cpass'></span>

            <!-- Date mm/dd/yyyy -->
            <div class="form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      
                    </div>
                    <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" placeholder="dd/mm/yyyy" data-mask name="DatanascUti" required>
                    <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                  </div>
                 
                  <!-- /.input group -->
                </div>
                <!-- /.form group -->
                <span class="msg-data"></span>

            <div class="form-group">
                    <!-- <label for="customFile">Custom File</label> -->

                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="customFile" name = "FotoUti" required>
                      <label class="custom-file-label" for="customFile">Choose file</label>
                    </div>
                    <span class="msg-foto"></span>
                  </div>

            <div class="row">
              <div class="col-8">
                <div class="icheck-primary">
                  <input type="checkbox" id="agreeTerms" name="terms" value="agree" required>
                  <label for="agreeTerms">
                   I agree to the <a href="#">terms</a>
                  </label>
                </div>
              </div>
              <!-- /.col -->
              <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Register</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
    
          <div class="social-auth-links text-center">
            <a href="#" class="btn btn-block btn-primary">
              <i class="fab fa-google mr-2"></i>
              Sign up using Google
            </a>
          </div>
    
          <a  class="text-center" data-toggle="modal" data-target="#modal-default" data-dismiss="modal">I already have a membership</a>
        </div>
        <!-- /.form-box -->
      </div><!-- /.card -->
    </div>
    <!-- /.register-box -->
  </div>
  <!-- /.modal-content -->
 </div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
    

<div class="modal fade" id="modal-passwd">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-header">
        <h4 class="modal-title">Forgot Password</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<div class="card card-outline card-primary">
  <div class="card-header text-center">
    <a class="h1"><b>Kami</b>Watch</a>
  </div>
  <div class="card-body">
    <p class="login-box-msg">You forgot your password? Here you can easily retrieve a new password.</p>
    <form data-toggle="modal" data-target="#modal-passwd-recover" data-dismiss="modal" method="post">
      <div class="input-group mb-3">
        <input type="email" class="form-control" placeholder="Email" name="LoginUti">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-envelope"></span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <button type="submit" class="btn btn-primary btn-block">Request new password</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <p class="mt-3 mb-1">
      <a class="text-center" data-toggle="modal" data-target="#modal-default" data-dismiss="modal">Login</a>
    </p>
  </div>
  <!-- /.login-card-body -->
</div>
</div>
<!-- /.login-box -->
  <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
</div>


<div class="modal fade" id="modal-passwd-recover">
  <div class="modal-dialog">
    <div class="modal-content">
      
      <div class="modal-header">
        <h4 class="modal-title">Password Recover</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<div class="card card-outline card-primary">
  <div class="card-header text-center">
    <a class="h1"><b>Kami</b>Watch</a>
  </div>
  <div class="card-body">
    <p class="login-box-msg">You are only one step a way from your new password, recover your password now.</p>
   
    <form class="text-center" data-toggle="modal" data-target="#modal-default" data-dismiss="modal" method="post">

      <div class="input-group mb-3">
        <input type="password" class="form-control" placeholder="Password" name = "PasswdUti">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div>
      <div class="input-group mb-3">
        <input type="password" class="form-control" placeholder="Confirm Password" name = "PasswdUti">
        <div class="input-group-append">
          <div class="input-group-text">
            <span class="fas fa-lock"></span>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <button type="submit" class="btn btn-primary btn-block">Change password</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <p class="mt-3 mb-1">
      <a class="text-center" data-toggle="modal" data-target="#modal-default" data-dismiss="modal">Login</a>
    </p>
  </div>
  <!-- /.login-card-body -->
</div>

</div>
  <!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
<!-- /.modal -->
</div>
    <!----------------------------------------------------------------------------------------------------------->
  
  
  
    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->
  
  <!-- jQuery -->
  <script src="./plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="./plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="./plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="./plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="./plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="./plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="./plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="./plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="./plugins/moment/moment.min.js"></script>
  <script src="./plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="./plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="./plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="./plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
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



 //Datemask dd/mm/yyyy
 $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()
    
  
</script>


</body>
  