<?php 
$data_pelanggan = query("SELECT * FROM pelanggan ORDER BY pelanggan.idpelanggan ASC");
?>
<!-- MAIN CONTENT -->
<div class="main-content">
	<div class="container-fluid">
		<!-- OVERVIEW -->
		<div class="panel panel-headline">
			<div class="panel-heading">
			<h1 class="text-center">Data Pelanggan</h1>
			<hr>
			</div>
			<?php 
			include "modal.php";
			if( isset($_POST["submit"])){
				if(tambah_pelanggan($_POST)){
					echo "<meta http-equiv='refresh' content='0'>";
				}
				else{
					echo "<meta http-equiv='refresh' content='0'>";
				}
			}
			?>
			
            <div class="panel-body">
				<p><button class="btn btn-success btn-xs" data-toggle="modal" data-target="#tambah_pelanggan"><i class="fas fa-plus"></i> Tambah Pelanggan</button></p>
				<table class="table table-bordered" id="table">
					<thead>
						<tr>
							<th>ID Pelanggan</th>
							<th>Nama Pelanggan</th>
							<th></th>
						</tr>
					</thead>
					<?php foreach($data_pelanggan as $pelanggan): ?>
					<tbody>
						<tr>
							<td><?=$pelanggan["idpelanggan"] ?></td>
							<td><?=$pelanggan["nama_pelanggan"]?></td>
						</tr>
					</tbody>
				<?php endforeach;?>
				</table>
            </div>
		</div>
		<!-- END OVERVIEW -->
	</div>
</div>
<!-- END MAIN CONTENT -->

