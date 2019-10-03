<?php require "functions/functions.php"?>
<?php 
session_start();

if(!isset($_SESSION['login'])){
	header("location:/ukom/page-login.php");
	exit;
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
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.css"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
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
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="../assets/img/user.png" class="img-circle" alt="Avatar"> <span>Waiter</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
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
					<ul class="nav" id="navButton">
						<li><a href="?page=home" class=""><i class="lnr lnr-home"></i> <span>Home</span></a></li>
						<li><a href="?page=transaksi" class=""><i class="lnr lnr-cart"></i> <span>Order Menu</span></a></li>
						<li><a href="?page=laporan" class=""><i class="lnr lnr-file-empty"></i> <span>Laporan</span></a></li>
						<li><a href="?page=pelanggan" class=""><i class="lnr lnr-users"></i> <span>Data Pelanggan</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
		<?php 
		
		if(isset($_GET["page"])){
			$page = $_GET["page"];
			switch ($page) {
				case 'home':
					include "page/home.php";
					break;
				case 'transaksi':
					include "page/transaksi.php";
					break;
				case 'laporan':
					include "page/laporan.php";
					break;
				case 'pelanggan':
					include "page/pelanggan.php";
					break;
						
				default:
					echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
					break;
			}
		}
		else{
			include "page/home.php";
		}
		
		?>
		</div>
		<!-- END MAIN -->
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2017 <a href="https://www.themeineed.com" target="_blank"> I Need</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="../assets/vendor/jquery/jquery.min.js"></script>
	<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>