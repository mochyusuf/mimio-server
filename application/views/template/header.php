<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Server Mimio</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?=base_url();?>bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url();?>bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?=base_url();?>bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
	<link rel="stylesheet" href="<?=base_url();?>assets/css/AdminLTE.css">
	  <!-- DataTables -->
  <link rel="stylesheet" href="<?=base_url();?>bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url();?>node_modules/datatables.net-responsive-bs/css/responsive.bootstrap.min.css">
  <!-- daterange picker -->
  <link rel="stylesheet" href="<?=base_url();?>bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?=base_url();?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Material Design -->
  <link rel="stylesheet" href="<?=base_url();?>assets/css/bootstrap-material-design.min.css">
  <link rel="stylesheet" href="<?=base_url();?>assets/css/ripples.min.css">
  <link rel="stylesheet" href="<?=base_url();?>assets/css/MaterialAdminLTE.css">
  <link rel="stylesheet" href="<?=base_url()?>node_modules/gijgo/css/gijgo.min.css">
    <link href="<?=base_url()?>node_modules/jasny-bootstrap/dist/css/jasny-bootstrap.min.css" rel="stylesheet">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?=base_url();?>assets/css/skins/all-md-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?=base_url();?>bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?=base_url();?>bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?=base_url();?>bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?=base_url();?>bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?=base_url();?>plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="<?=base_url();?>plugins/iCheck/all.css">
  <link rel="stylesheet" href="<?=base_url();?>assets/css/style.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini">M<b>A</b>L</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Mimio <b>D.O</b> Express</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=base_url().$admin[0]['image_admin']?>" class="user-image" alt="User Image">
              <span class="hidden-xs"><?=$admin[0]['nama_admin']?></span>
            </a>
          </li>
          <!-- Control Sidebar Toggle Button -->
          <li>
            <a href="admin/logout"><i class="fa fa-sign-out"></i> Keluar</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="image square-image">
          <img src="assets/image/mimio.png" class="img-circle" alt="User Image">
        </div>
      </div>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Menu</li>
        <li class="">
          <a href="main?laman=dashboard">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="">
          <a href="main?laman=pengendara">
            <i class="fa fa-motorcycle"></i> <span>Pengendara</span>
          </a>
        </li>
        <li class="">
          <a href="main?laman=konsumen">
            <i class="fa fa-address-book"></i> <span>Konsumen</span>
          </a>
        </li>
        <li class="">
          <a href="main?laman=restoran">
            <i class="fa fa-cutlery"></i> <span>Restoran</span>
          </a>
        </li>
        <li class="">
          <a href="main?laman=pemesanan">
            <i class="fa fa-shopping-cart"></i> <span>Pemesanan</span>
          </a>
        </li>
        <li class="">
          <a href="main?laman=admin">
            <i class="fa fa-user"></i> <span>Admin</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
