<?php 
	session_start();
	//ligação ao servidor e à base de dados
	include "Includes/ligamysql.php";
	//indicação do script a ser executado, cmd é definido aqui e de seguida verifica-se no switch que o script a executar
	if (isset($_REQUEST['cmd'])) 
		$cmd=$_REQUEST['cmd']; 
	else 
		$cmd='home';





?>


<!DOCTYPE html>
<html lang="PT">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>KamiWatch | Dashboard</title>

  <link rel="shortcut icon" href="imagens/LogoAA.jpg" type="image/x-icon">

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">

   <!-- uPlot -->
   <link rel="stylesheet" href="plugins/uplot/uPlot.min.css">
   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
 



</head>

</head>

<body class="hold-transition sidebar-mini layout-fixed">
<?php  
			

if(isset($_SESSION['tipo']) && ($_SESSION['tipo']==1)) {
	require 'Includes/menuA.php';
}elseif(isset($_SESSION['tipo']) && ($_SESSION['tipo']==2)){
	require 'Includes/MenuM.php';
}elseif(isset($_SESSION['tipo']) && ($_SESSION['tipo']==3)){
	require 'Includes/MenuU.php';
}elseif(isset($_SESSION['tipo']) && ($_SESSION['tipo']==4)){
	require 'Includes/MenuP.php';
}elseif(isset($_SESSION['tipo']) && ($_SESSION['tipo']==5)){
	require 'Includes/MenuF.php';
}else{
	require 'Includes/menu2.php';
}
?>

  

<div class="wrapper">
<div class="content-wrapper">

<div class="container-fluid">
        
          <div class="col-sm-13">

          <!--espaço da página onde é mostrado o conteúdo da página-->
    <div class="col-sm-12"> 
		
<?php		
					if(isset($_SESSION['nome']) && isset($_SESSION['tipo']) && $_SESSION['tipo']==1) {
						switch($cmd) {
							//Admin
					 case 'home'    : require('Includes/home.php');  break;
					 case 'iframe'    : require('iframe.html');  break;
					 case 'DashboardA' : require('Dashboard/DashboardA.php'); break;
					 case 'map': require('maps/maps.php'); break;
					case 'map_reg': require('maps/cadastrar.php'); break;  
					case 'processa_cad': require('maps/processa_cad.php'); break;
					case 'resultado': require('maps/resultado.php'); break;
					case 'paci_list': require('Dashboard/uti_list.php'); break;
					 /*case 'adm'  : require('Includes/menuA.php');  break;
					case 'med'  : require('Includes/menuM.php');  break;
					case 'user' : require('Includes/menuU.php');  break;*/
		 
					 //Sessao
					 case 'logout'  : require('Login/logout.php'); break;
					 case 'login'   : require('Login/login.php'); break;
					 case 'perfil'  : require('Login/perfil.php'); break;
		 
					 //Utilizador
					 case 'add-uti' : require('utilizador/adduti.php');   break;
					 case 'ins-uti' : require('utilizador/insuti.php');   break;
					 case 'list-uti': require('utilizador/lisuti.php');   break;
					 case 'edi-uti' : require('utilizador/ediuti.php');   break;
					 case 'upd-uti' : require('Login/upduti.php');   break;
					 case 'upd-pass' :include('Login/udppass.php');  break;
					 case 'upd-img' : require('Login/updimg.php');   break;
					 case 'upd-temp' : require('Login/temp.php');   break;

					 case 'del-uti' : require('utilizador/deluti.php');   break;
		 
					 //Tipo Utilizador
					 case 'add-tputi' : require('tipo_utilizador/addtputi.php');  break;
					 case 'list-tputi': require('tipo_utilizador/listtputi.php'); break;
					 case 'ins-tputi' : require('tipo_utilizador/instputi.php');  break;
					 case 'edi-tputi' : require('tipo_utilizador/editputi.php');  break;	
					 case 'upd-tputi' : require('tipo_utilizador/updtputi.php');  break;	
					 case 'del-tputi' : require('tipo_utilizador/deltputi.php');  break;			
		 
					 //Parametros Medicos
					 case 'add-pm' : require('parametros_medicos/addpm.php');  break;
					 case 'list-pm': require('parametros_medicos/lispm.php');  break;
					 case 'ins-pm' : require('parametros_medicos/inspm.php');  break;
					 case 'edi-pm' : require('parametros_medicos/edipm.php');  break;	
					 case 'upd-pm' : require('parametros_medicos/updpm.php');  break;	
					 case 'del-pm' : require('parametros_medicos/delpm.php');  break;	
		 
					 //Paciente
					 case 'add-paci' : require('paciente/addpaci.php');  break;
					 case 'list-paci': require('paciente/lispaci.php');  break;
					 case 'ins-paci' : require('paciente/inspaci.php');  break;
					 case 'edi-paci' : require('paciente/edipaci.php');  break;	
					 case 'upd-paci' : require('paciente/updpaci.php');  break;	
					 case 'del-paci' : require('paciente/delpaci.php');  break;	
		 
					 //Dados Biometricos
					 case 'add-db' : require('dados_biometricos/adddb.php');  break;
					 case 'add-data' : require('dados_biometricos/add-data.php');  break;
					 case 'list-db': require('dados_biometricos/lisdb.php');  break;
					 case 'ins-db' : require('dados_biometricos/insdb.php');  break;
					 case 'ins-db-auto' : require('dados_biometricos/ins-db-auto.php');  break;
					 case 'edi-db' : require('dados_biometricos/edidb.php');  break;	
					 case 'upd-db' : require('dados_biometricos/upddb.php');  break;	
					 case 'del-db' : require('dados_biometricos/deldb.php');  break;	

					 case 'chart' : require('Dados_B/chart_a.php'); break;
		 
					 //Familia
					 case 'add-fami' : require('familia/addfami.php');  break;
					 case 'list-fami': require('familia/lisfami.php');  break;
					 case 'ins-fami' : require('familia/insfami.php');  break;
					 case 'edi-fami' : require('familia/edifami.php');  break;	
					 case 'upd-fami' : require('familia/updfami.php');  break;	
					 case 'del-fami' : require('familia/delfami.php');  break;	

					  //Paci-Fami
					  case 'add-fami-paci' : require('paci-fami/addfami-paci.php');  break;
					  case 'list-fami-paci': require('paci-fami/lisfami-paci.php');  break;
					  case 'ins-fami-paci' : require('paci-fami/insfami-paci.php');  break;
					  case 'edi-fami-paci' : require('paci-fami/edifami-paci.php');  break;	
					  case 'upd-fami-paci' : require('paci-fami/updfami-paci.php');  break;	
					  case 'del-fami-paci' : require('paci-fami/delfami-paci.php');  break;	
					default: require('Includes/erro.php'); 					break;
						   }
						}
						elseif(isset($_SESSION['nome']) && isset($_SESSION['tipo']) && $_SESSION['tipo']==2) {
							switch($cmd) {
							//Medico
								 //Dados Biometricos
					case 'add-db' : require('dados_biometricos/adddb.php');  break;
					case 'list-db': require('dados_biometricos/lisdb.php');  break;
					case 'ins-db' : require('dados_biometricos/insdb.php');  break;
					case 'edi-med' : require('dados_biometricos/edimed.php');  break;	
					case 'upd-db' : require('dados_biometricos/upddb.php');  break;	
					case 'med' : require('dados_biometricos/Med.php');  break;	

					//Parametros Medicos
					case 'add-pm' : require('parametros_medicos/addpm.php');  break;
					case 'list-pm': require('parametros_medicos/lispm.php');  break;
					case 'ins-pm' : require('parametros_medicos/inspm.php');  break;
					case 'edi-pm' : require('parametros_medicos/edipm.php');  break;	
					case 'upd-pm' : require('parametros_medicos/updpm.php');  break;	
					case 'del-pm' : require('parametros_medicos/delpm.php');  break;
					case 'list-paci': require('paciente/lispaci.php');  break;

						 //Paciente
						 case 'add-paci' : require('paciente/addpaci.php');  break;
						 case 'list-paci': require('paciente/lispaci.php');  break;
						 case 'ins-paci' : require('paciente/inspaci.php');  break;
						 case 'edi-paci' : require('paciente/edipaci.php');  break;	
						 case 'upd-paci' : require('paciente/updpaci.php');  break;	
						 case 'del-paci' : require('paciente/delpaci.php');  break;	
					
					
					case 'home'     : require('Includes/home.php'); break;
					case 'logout'  : require('Login/logout.php'); break;
					case 'login'   : require('Login/login.php'); break;
					case 'perfil'  : require('Login/perfil.php'); break;
					case 'upd-uti' : require('Login/upduti.php');   break;
					case 'upd-pass' : require('Login/updpass.php');   break;
					 case 'upd-img' : require('Login/updimg.php');   break;
					 case 'chart' : require('Dados_B/charts.php'); break;
										
										
					 default: require('Includes/erro.php'); 					break;
							}
						}
					elseif(isset($_SESSION['nome']) && isset($_SESSION['tipo']) && $_SESSION['tipo']==3) {
							switch($cmd) {

							//Utilizador
			
					
					case 'home'     : require('Includes/home.php'); break;
					case 'logout'  : require('Login/logout.php'); break;
					case 'login'   : require('Login/login.php'); break;
					case 'login_paci'   : require('Login/login_paci.php'); break;
					case 'perfil'  : require('Login/perfil.php'); break;
					case 'upd-uti' : require('Login/upduti.php');   break;
					case 'upd-pass' : require('Login/udppass.php');   break;
					case 'upd-img' : require('Login/updimg.php');   break;
					case 'DashboardU' : require('Dashboard/DashboardU.php'); break;
					case 'chart' : require('Dados_B/charts.php'); break;
					case 'map': require('maps/maps_uti.php'); break;
					case 'resultado': require('maps/resultado_u.php'); break;
					case 'ins-resg_fami': require('Login/ins-resg_fami.php');    break;
					case 'ins-resg_paci': require('Login/ins-resg_paci.php');    break;

					case 'fami-paci': require('fami-paci/fami-paci.php'); break;
					case 'paci'     : require('Includes/paci.php'); break;
					

										
										
					default: require('Includes/erro.php'); 					break;
							}
						}elseif(isset($_SESSION['nome'])&& isset($_SESSION['tipo']) && $_SESSION['tipo']==4) {
							switch($cmd) {

							//Paciente
								 //Dados Biometricos
					case 'add-db' : require('dados_biometricos/adddb.php');  break;
					case 'list-db': require('dados_biometricos/lisdb.php');  break;
					case 'ins-db' : require('dados_biometricos/insdb.php');  break;
					case 'edi-db' : require('dados_biometricos/edidb.php');  break;	
					case 'upd-db' : require('dados_biometricos/upddb.php');  break;	
					case 'del-db' : require('dados_biometricos/deldb.php');  break;	

					//Parametros Medicos
					case 'add-pm' : require('parametros_medicos/addpm.php');  break;
					case 'list-pm': require('parametros_medicos/lispm.php');  break;
					case 'ins-pm' : require('parametros_medicos/inspm.php');  break;
					case 'edi-pm' : require('parametros_medicos/edipm.php');  break;	
					case 'upd-pm' : require('parametros_medicos/updpm.php');  break;	
					case 'del-pm' : require('parametros_medicos/delpm.php');  break;
					case 'list-paci': require('paciente/lispaci.php');  break;
					
					
					case 'home'     : require('Includes/home.php'); break;
					case 'logout'  : require('Login/logout.php'); break;
					case 'login'   : require('Login/login.php'); break;
					case 'login_paci'   : require('Login/login_paci.php'); break;
					case 'perfil'  : require('Login/perfil_p.php'); break;
					case 'upd-uti' : require('Login/upduti_p.php');   break;
					case 'upd-pass' : require('Login/updpass_p.php');   break;
					case 'upd-img' : require('Login/updimg_p.php');   break;
					case 'DashboardU' : require('Dashboard/DashboardU.php'); break;
					case 'chart' : require('Dados_B/charts.php'); break;
					case 'map': require('maps/maps_uti.php'); break;
					case 'resultado': require('maps/resultado_u.php'); break;
					case 'familia': require('paciente/familia.php');    break;
					case 'ins-fami-paci' : require('paciente/add-fami.php');  break;
					case 'del-fami-paci' : require('paciente/del-fami.php');  break;

					default: require('Includes/erro.php'); 					break;
							}
						}
						elseif(isset($_SESSION['nome'])&& isset($_SESSION['tipo']) && $_SESSION['tipo']==5) {
							switch($cmd) {

							//Familia
								 //Dados Biometricos
					case 'add-db' : require('dados_biometricos/adddb.php');  break;
					case 'list-db': require('dados_biometricos/lisdb.php');  break;
					case 'ins-db' : require('dados_biometricos/insdb.php');  break;
					case 'edi-db' : require('dados_biometricos/edidb.php');  break;	
					case 'upd-db' : require('dados_biometricos/upddb.php');  break;	
					case 'del-db' : require('dados_biometricos/deldb.php');  break;	

					//Parametros Medicos
					case 'add-pm' : require('parametros_medicos/addpm.php');  break;
					case 'list-pm': require('parametros_medicos/lispm.php');  break;
					case 'ins-pm' : require('parametros_medicos/inspm.php');  break;
					case 'edi-pm' : require('parametros_medicos/edipm.php');  break;	
					case 'upd-pm' : require('parametros_medicos/updpm.php');  break;	
					case 'del-pm' : require('parametros_medicos/delpm.php');  break;
					case 'list-paci': require('paciente/lispaci.php');  break;
					
					
					case 'home'     : require('Includes/home.php'); break;
					case 'logout'  : require('Login/logout.php'); break;
					case 'login'   : require('Login/login.php'); break;
					case 'perfil'  : require('Login/perfil_f.php'); break;
					case 'upd-uti' : require('Login/upduti_f.php');   break;
					case 'upd-pass' : require('Login/updpass_f.php');   break;
					case 'upd-img' : require('Login/updimg_f.php');   break;
					case 'DashboardF' : require('Dashboard/DashboardF.php'); break;
					case 'chart' : require('Dados_B/charts_f.php'); break;
					case 'map': require('maps/maps_uti.php'); break;
					case 'resultado': require('maps/resultado_u.php'); break;
					case 'ins-resg_fami': require('Login/ins-resg_fami.php');    break;
					case 'paci': require('familia/paci.php');    break;

					default: require('Includes/erro.php'); 					break;
							}
						}
						else{
							switch($cmd) {
							//Sem Login
					case 'home'    : require('Includes/home.php');     break;
					case 'pre'    : require('c/test.html');     break;
					case 'login'   : require('Login/login.php'); break;
					case 'add-uti' : require('Login/adduti.php'); break;
					case 'ins-resg': require('Login/ins-resg.php');    break;

					default: require('Includes/home.php'); 					break;
							}
						}
					?>

</div>
    </div>

</div>
</div>
 <!-- /.content-wrapper -->
 <footer class="main-footer">
    <strong>Copyright &copy; 2021 <a href="#">KamiWatch</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 1.0
    </div>
  </footer>
 <!-- Control Sidebar -->
 <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="plugins/moment/moment.min.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard.js"></script>

<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>


<!-- uPlot -->
<script src="plugins/uplot/uPlot.iife.min.js"></script>

<!-- AdminLTE dashboard demo (This is only for demo purposes) world_countries.min.js-->
<script src="dist/js/pages/dashboard2.js"></script>

<script type="text/javascript" src="Login/validacoes/validacao.js"></script>

<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": true,
      "buttons": ["copy", "csv", "excel", "pdf", "print"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true,
      "responsive": true,
    });
  });
</script>

</body>
</html>
