<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php
include ('../system/inc/config.php');
include ('../system/inc/function.php');

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Learning Centre Library</title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.5 -->
        <link rel="stylesheet" href="../system/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">-->
        <link rel="stylesheet" href="../system/font-awesome-4.4.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <!--<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">-->
        <link rel="stylesheet" href="../system/ionicons-2.0.1/css/ionicons.min.css">
        <!-- DataTables -->
        <link rel="stylesheet" href="../system/plugins/datatables/dataTables.bootstrap.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../system/dist/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="../system/dist/css/skins/_all-skins.min.css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <header class="main-header">
                <!-- Logo -->
                <a href="index2.html" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>A</b>LT</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>ADMINISTRATOR</b></span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top" role="navigation">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class="navbar-custom-menu">
                        <ul class="nav navbar-nav">



                            <!-- User Account: style can be found in dropdown.less -->
                            <li class="dropdown user user-menu">
                                <a href="login/logout.php" >
                                   
                                    <span class="fa fa-power-off"> Log out</span>
                                </a>
                                
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
                        <div class="pull-left image">
                            <img src="../system/dist/img/profile.png" class="img-circle" alt="User Image">
                        </div>
                        <div class="pull-left info">
                            <p><?php echo $_SESSION['username'] ?></p>
                            
                        </div>
                    </div>
                    <!-- search form -->
                    
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">

                        <li>
                            <a href="index1.php?mod=petugas&pg=petugas_list">
                                <i class="fa fa-laptop"></i> <span>DASHBOARD</span>
<!--                                <small class="label pull-right bg-red">3</small>-->
                            </a>
                        </li>
                        
						<li><a href="index1.php?mod=petugas&pg=petugas_list"><i class="fa fa-user-plus"></i><span>PENGELOLAAN PETUGAS</span></a></li>
                        

                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                   
                </section>


<!--
                <?php
                echo $contents;
                ?>
-->
                <?php

if(isset($_GET['pg'])){                
$pg = $_GET['pg'];
	$mod = $_GET['mod'];
                
include $mod . '/' . $pg . ".php";
}
/*
 * PHP Code untuk mendapatkan halaman view masing masing tabel
 */
                
//if(!isset($_GET['pg'])) {
//	if(isset($_SESSION['username'])){
//		include ('produk/produk_view.php');
//	}else{
//	include ('login/login_form.php');
//    }
//} else {
//	$pg = $_GET['pg'];
//	$mod = $_GET['mod'];
//	include $mod . '/' . $pg . ".php";
////    include ('buku/buku_list.php');
//}
                ?>



            </div><!-- /.content-wrapper -->
            <footer class="main-footer">
                <div class="pull-right hidden-xs">
                    
                </div>
                
            </footer>

            <!-- Add the sidebar's background. This div must be placed
                 immediately after the control sidebar -->
            <div class="control-sidebar-bg"></div>
        </div><!-- ./wrapper -->

        <!-- jQuery 2.1.4 -->
        <script src="../system/plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <!-- Bootstrap 3.3.5 -->
        <script src="../system/bootstrap/js/bootstrap.min.js"></script>
        <!-- DataTables -->
        <script src="../system/plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../system/plugins/datatables/dataTables.bootstrap.min.js"></script>
        <!-- SlimScroll -->
        <script src="../system/plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <!-- FastClick -->
        <script src="../system/plugins/fastclick/fastclick.min.js"></script>
        <!-- AdminLTE App -->
        <script src="../system/dist/js/app.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="../system/dist/js/demo.js"></script>
        <!-- page script -->
        <script>
            $(function () {
                $("#example1").DataTable();
                $('#example2').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false
                });
            });
        </script>
    </body>
</html>
