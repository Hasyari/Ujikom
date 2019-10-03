<?php 
require "functions/functions.php";
$laporan = query("SELECT laporan.no, laporan.nama_menu, laporan.jumlah, menu.harga FROM laporan JOIN menu ON menu.nama_menu = laporan.nama_menu");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <title>Document</title>
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="../assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="../assets/vendor/chartist/css/chartist-custom.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs/dt-1.10.18/datatables.min.css"/>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="../assets/css/main.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="icon" type="image/png" sizes="96x96" href="../assets/img/favicon.png">
</head>
<body>
	<center>
 
		<h2>DATA LAPORAN PENJUALAN</h2>
 
	</center>
 

 
	<table class="table table-bordered">
		<thead>
			<tr>
				<th width="10">No</th>
				<th>Nama Menu</th>
				<th width="10">Jumlah Terpesan</th>
				<th width="100">Harga</th>
			</tr>
		</thead>

		<?php 
		$no=0;
		foreach($laporan as $laporan_data):
		 ?>
		<tbody>
			<tr>
				<td><?=++$no; ?></td>
				<td><?=$laporan_data["nama_menu"]?></td>
				<td><?=$laporan_data["jumlah"] ?></td>
				<td><?="Rp.  ".$laporan_data["harga"]?></td>
			</tr>
		</tbody>
	<?php endforeach;?>
	</table>
 
	<script>
		window.print();
	</script>

</body>
</html>
