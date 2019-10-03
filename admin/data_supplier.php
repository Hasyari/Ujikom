<?php 
require "functions.php";

$supplier = query("SELECT * FROM supplier");

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
	<link rel="icon" type="image/png" sizes="96x96" href="../assets/img/favicon.png">
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
						<li><a href="data_user.php" class=""><i class="lnr lnr-users"></i> <span>Data Users</span></a></li>
						<li><a href="data_menu.php" class=""><i class="lnr lnr-dice"></i> <span>Data Menu</span></a></li>
                        <li><a href="data_supplier.php" class="active"><i class="lnr lnr-cart"></i></i> <span>Data Supplier</span></a></li>
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
							<?php include "modal.php"; ?>
							<?php 
								if( isset($_POST["submit"])){
									if(tambah_supplier($_POST)){
										echo "<meta http-equiv='refresh' content='0'>";
									}
									else{
										echo "<meta http-equiv='refresh' content='0'>";
									}
								}
							?>
                            <h1 class="text-center">Daftar Pemasok</h1>
                            <hr>
                            <p><button class="btn btn-success btn-xs" data-toggle="modal" data-target="#tambah_supplier"><i class="fas fa-plus"></i> Tambah Data</button></p>
							<table class="table table-bordered" id="table">
								<thead>
                                    <tr>
                                        <th width="10">ID</th>
                                        <th>Nama Perusahaan</th>
                                        <th>No Telephone</th>
                                        <th width="10"></th>
                                        <th width="10"></th>
                                    </tr>
                                </thead>
                                <tbody>
									<?php foreach ($supplier as $pemasok): ?>
									<tr>
										<td><?=$pemasok["id_perusahaan"]; ?></td>
										<td><?=$pemasok["nama_perusahaan"]; ?></td>
										<td><?=$pemasok["no_telepon"]; ?></td>
										<td><a class="btn btn-warning btn-xs" href="ubah_supplier.php?idperusahaan=<?= $pemasok['id_perusahaan'];?>"><i class="fas fa-edit"></i> Edit</a></td>
									<td><a href="#" onclick="confirm_modal('hapus.php?&idperusahaan=<?= $pemasok['id_perusahaan']; ?>');" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i> Hapus</button></td>
									</tr>
									<?php endforeach;?>
                                </tbody>
                            </table>
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
	<!-- Javascript -->
	<script src="../assets/vendor/jquery/jquery.min.js"></script>
	<script src="../assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.js"></script>
	<script>
		$(document).ready( function () {
			$('#table').DataTable({
				"columnDefs": [
    				{ "orderable": false, "targets": 3 },
					{ "orderable": false, "targets": 4 }
  				],
			});
		} );
		
		function confirm_modal(delete_url)
		{
			$('#modal_delete').modal('show', {backdrop: 'static'});
			document.getElementById('delete_link').setAttribute('href' , delete_url);
		}
	</script>
</body>

</html>