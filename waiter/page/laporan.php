<?php 
$laporan = query("SELECT laporan.no, laporan.nama_menu, laporan.jumlah, menu.harga FROM laporan JOIN menu ON menu.nama_menu = laporan.nama_menu");
?>
<!-- MAIN CONTENT -->
<div class="main-content">
	<div class="container-fluid">
		<!-- OVERVIEW -->
		<div class="panel panel-headline">
			<div class="panel-heading">
			<h1 class="text-center">Laporan Penjualan</h1>
			<hr>
			</div>
            <div class="panel-body">
				<table class="table table-bordered" id="table">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Menu</th>
							<th>Jumlah Terpesan</th>
							<th>Harga</th>
						</tr>
					</thead>
					<?php foreach($laporan as $laporan_data): ?>
					<tbody>
						<tr>
							<td><?=$laporan_data["no"] ?></td>
							<td><?=$laporan_data["nama_menu"]?></td>
							<td><?=$laporan_data["jumlah"] ?></td>
							<td><?="Rp.  ".$laporan_data["harga"]?></td>
						</tr>
					</tbody>
				<?php endforeach;?>
				</table>
				<a href="laporan-cetak.php" class="btn btn-success">Print</a>
            </div>
		</div>
		<!-- END OVERVIEW -->
	</div>
</div>
<!-- END MAIN CONTENT -->
