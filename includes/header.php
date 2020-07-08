<?php require_once 'php_action/core.php'; ?>
<!DOCTYPE html>
<html >
<head>
<title>Inicio| SoftVentas</title>
 
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <link rel="stylesheet" href="../plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assests/bootstrap/css/bootstrap.min.css">
	<!-- bootstrap theme-->
	<link rel="stylesheet" href="assests/bootstrap/css/bootstrap-theme.min.css">
	<!-- font awesome -->
	<link rel="stylesheet" href="assests/font-awesome/css/font-awesome.min.css">

  <!-- custom css -->
  <link rel="stylesheet" href="custom/css/custom.css">

	<!-- DataTables -->
  <link rel="stylesheet" href="assests/plugins/datatables/jquery.dataTables.min.css">

  <!-- file input -->
  <link rel="stylesheet" href="assests/plugins/fileinput/css/fileinput.min.css">

  <!-- jquery -->
	<script src="assests/jquery/jquery.min.js"></script>
  <!-- jquery ui -->  
  <link rel="stylesheet" href="assests/jquery-ui/jquery-ui.min.css">
  <script src="assests/jquery-ui/jquery-ui.min.js"></script>

  <!-- bootstrap js -->
	<script src="assests/bootstrap/js/bootstrap.min.js"></script>

<!-- Alertify -->
  <script src="assests/alertify/js/alertify.min.js"></script>
  <link rel="stylesheet" href="assests/alertify/themes/alertify.core.css">
  <link rel="stylesheet" href="assests/alertify/themes/alertify.default.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="custom/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="custom/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="custom/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="custom/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="custom/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="custom/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="custom/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="custom/plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
      
    <ul class="navbar-nav justify">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="Inicio.php" class="nav-link">Inicio | </a>
      </li>
      <li class="dropdown" id="navSetting">
			        	<a href="#" class="right fas " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> <i class="glyphicon glyphicon-user"></i> <span class="caret"></span></a>
			          	<ul class="dropdown-menu">
			          		<li id="topNavUser"><a href=""> <i class="glyphicon glyphicon-user"></i> <span><?php echo $_SESSION['name'];   ?></span> </a></li> 
			          		<?php
			          		if ($_SESSION['rol'] == 1) {
			          			# code...
			          			echo '<li id="topNavSetting"><a href="setting.php"> <i class="glyphicon glyphicon-wrench"></i> Configuración</a></li> ';
			          			echo '<li id="topNavActivaciones"><a href="activaciones.php"><i class="fa fa-unlock-alt" aria-hidden="true"></i>	Activaciones</a></li> ';
			          		}else{

			          		}
			          		?>                 
                    <li id="topNavLogout"><a data-toggle="modal" data-target="#ModalEnd"> <i class="glyphicon glyphicon-log-out"></i> Cerrar Sesion</a></li>    
                    <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>        
			          	</ul>
			        </li>   
    </ul>
        
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="Inicio.php" class="brand-link">
      <img src="custom/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-8"
           style="opacity: .8">
      <span class="brand-text font-weight-light">SoftVentas</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="custom/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">  Bienvenido <?php echo $_SESSION["k_username"]; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="./Inicio.php" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Inicio
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="client.php" class="nav-link ">
              <i class="glyphicon glyphicon-credit-card"></i>
              <p>
                 Cliente  
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="product.php" class="nav-link">
              <i class="glyphicon glyphicon-ruble"></i>
              <p>
                 Productos
              </p>
            </a>
          </li>      
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="glyphicon glyphicon-shopping-cart"></i>
              <p>
                Ventas
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="orders.php" class="nav-link">
                  <i class="glyphicon glyphicon-plus"></i>
                  <p>Agregar Orden</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="ordersGestion.php" class="nav-link">
                  <i class="glyphicon glyphicon-edit"></i>
                  <p>Gestionar Orden</p>
                </a>
              </li>
             </ul>
          
          <?php
          if ($_SESSION['rol'] == 1) {
            echo '
            <li class="nav-item">
            <a href="gastos.php" class="nav-link">
              <i class="glyphicon glyphicon-usd"></i>
              <p>
               Gastos
              </p>
            </a>
          </li>';
          }else{

              }
          ?>    
           <li class="nav-item">
            <a href="reports.php" class="nav-link">
              <i class="glyphicon glyphicon-hdd"></i>
              <p>
               Reportes
              </p>
            </a>
          </li>   
          <li class="nav-item">
            <a href="calendar.php" class="nav-link">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Calendario eventos
              </p>
            </a>
          </li>    
      </ul>
            
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<!-- MODAL -->
<div id="ModalEnd" data-backdrop="static" data-keyboard="false" class="modal fade">  
  <div class="modal-dialog ">  
      <div class="modal-content"> 
          <div class="modal-header">  
                <button type="button" class="close" data-dismiss="modal">&times;</button>  
                <h4 class="modal-title">Cerrar Sesión</h4>  
          </div>  
      <div class="modal-body" id="">  

          <div class="row" class="col-sm-6 col-md-4">
            <center><img  src="assests/images/admiracion.png"  height="250"></center>
              <p class="text-info text-center">¿ ESTAS SEGURO DE SALIR DEL SISTEMA ?</p>
            
          </div>

    </div>  

          <div class="modal-footer">  
          	  <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
              <a href="cerrar_sesion.php" ><button type="button" class="btn btn-success" >Aceptar</button></a>
          </div>  
      </div>  
  </div>  
</div>
<!--End Modal -->
<div class="container">
<div class="content-wrapper">

