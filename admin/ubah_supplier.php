<?php 
require "functions.php";

$idperusahaan = $_GET["idperusahaan"];

$supplier = query("SELECT * FROM supplier WHERE id_perusahaan = $idperusahaan")[0];

if(isset($_POST['submit'])){
	if(ubah_supplier($_POST)){
		header('location:data_supplier.php');
		exit;
	}else
	{
		header('location:data_supplier.php');
		exit;		
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Restoran Mang Ali</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/vendor/linearicons/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<link rel="stylesheet" href="../assets/vendor/chartist/css/chartist-custom.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.css"/>
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="../assets/css/main.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
  <link rel="shortcut icon" href="favicon.png" type="image/x-icon">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="../assets/img/user.png" class="img-circle" alt="Avatar"> <span>Admin</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="../logout.php"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li><a href="index.php" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="data_user.php" class="active"><i class="lnr lnr-users"></i> <span>Data Users</span></a></li>
						<li><a href="data_menu.php" class=""><i class="lnr lnr-dice"></i> <span>Data Menu</span></a></li>
						<li><a href="data_supplier.php" class=""><i class="lnr lnr-cart"></i></i> <span>Data Supplier</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<!-- OVERVIEW -->
					<div class="panel panel-headline">
						<div class="panel-body">
                            <h1 class="text-center">Ubah Data Pemasok</h1>
                            <hr>
                            <form class="form-horizontal" action="" method="post">
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="nomor">ID : </label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control" name="id_perusahaan" id="nomor" value="<?= $supplier["id_perusahaan"]?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="namaperusahaan">Nama Perusahaan : </label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control" name="nama_perusahaan" id="namaperusahaan" value="<?= $supplier["nama_perusahaan"]?>" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-4" for="notelepon">No Telepon : </label>
                                    <div class="col-sm-8">
                                    <input type="text" class="form-control" name="no_telepon" id="notelepon" value="<?= $supplier["no_telepon"]?>" required>
                                    </div>
                                </div>
								<div class="modal-footer">
									<div class="form-group">        
										<div class="col-sm-offset-2 col-sm-10">
											<button type="submit" class="btn btn-success " name="submit">Submit</button>
											<a href="data_supplier.php" class="btn btn-danger ">Cancel</a>
										</div>
									</div>
                                </div>
                            </form> 
						</div>
					</div>
					<!-- END OVERVIEW -->
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank">Theme I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
</body>

</html>