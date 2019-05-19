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
        <title>Login Learning Centre Library</title>
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
    <body class="hold-transition login-page">
        


<!--
                <?php
                echo $contents;
                ?>
-->
                <?php

//if(isset($_GET['pg'])){                
//$pg = $_GET['pg'];
//	$mod = $_GET['mod'];
//                
//include $mod . '/' . $pg . ".php";
//}
/*
 * PHP Code untuk mendapatkan halaman view masing masing tabel
 */
                
if(!isset($_GET['pg'])) {
	if(isset($_SESSION['error'])){
		include ('login/login_form_error.php');
	}else{
	include ('login/login_form.php');
    }
} else {
	$pg = $_GET['pg'];
	$mod = $_GET['mod'];
	include $mod . '/' . $pg . ".php";
//    include ('buku/buku_list.php');
}
                ?>



   <!-- ./wrapper -->

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
