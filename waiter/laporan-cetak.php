<?php require "functions/functions.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
	<center>
 
		<h2>DATA LAPORAN PENJUALAN</h2>
 
	</center>
 

 
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			<th>Nama Menu</th>
			<th width="1%">Jumlah Terpesan</th>
		</tr>
        <?php 
        $no = 0;
		$sql = query("SELECT * FROM laporan");
		foreach($sql as $data){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['nama_menu']; ?></td>
			<td><?php echo $data['jumlah']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>
 
	<script>
		window.print();
	</script>

</body>
</html>