<?php 

$menus = query("SELECT * FROM menu");
$pelanggan = query("SELECT * FROM pelanggan");
$tmp_pesanan = query("SELECT tmp_pesanan.idmenu, tmp_pesanan.jumlah, menu.nama_menu, menu.harga FROM menu INNER JOIN tmp_pesanan ON menu.idmenu = tmp_pesanan.idmenu");


if(isset($_POST["btnSave"])){
	$idmenu = $_POST["idmenu"];
	$nama = $_POST["namapelanggan"];
	$nama_pelanggan = explode(".", $nama)[1];
	$idpelanggan = (int)explode(".", $nama)[0];
	$jumlah = (int)$_POST["jumlah"];
	if ($jumlah == 0){
		
		echo "
			<script>alert('Jumlah Tidak ada');</script>
		";
		echo "<meta http-equiv='refresh' content='0'>";

	}

	$nama = $_POST["namapelanggan"];

	$query = "INSERT INTO tmp_pesanan VALUES (NULL, '$nama_pelanggan', '$idmenu', $idpelanggan, $jumlah)";
	$ret = mysqli_query($conn, $query);
	if($ret){
		echo "<meta http-equiv='refresh' content='0'>";
	}

}
if(isset($_GET["act"])){
	$idmenu = $_GET["id"];
	$query = "DELETE FROM tmp_pesanan WHERE idmenu = '$idmenu'";
	$ret = mysqli_query($conn, $query);
	if($ret){
		header("location:?page=transaksi");
		exit;
		
	}
}

if(isset($_POST["submit"])){
	$data_pesanan = query("SELECT * FROM tmp_pesanan");
	
	foreach($data_pesanan as $pesanan){
		$idmenu = $pesanan["idmenu"];
		$idpelanggan = $pesanan["idpelanggan"];
		$jumlah = $pesanan["jumlah"];
		$namamenu = $tmp_pesanan[0]["nama_menu"];

		//Add Data ke laporan
		$tambah_laporan = "INSERT INTO laporan VALUES(NULL, '$idmenu', '$namamenu', $jumlah)";
		mysqli_query($conn, $tambah_laporan);

		//memindahkan data dari tmp_pesanan ke pesanan
		$tambah_pesanan = "INSERT INTO pesanan VALUES(NULL, '$idmenu', $idpelanggan, '$jumlah')";
		mysqli_query($conn, $tambah_pesanan);

		//mendelete data dari tmp_pesanan 
		$hapus = "DELETE FROM tmp_pesanan WHERE idmenu = '$idmenu'";
		$ret = mysqli_query($conn,$hapus);
		if($ret){
			echo "<meta http-equiv='refresh' content='0'>";
		}
	


	}
}

?>
<!-- MAIN CONTENT -->
<div class="main-content">
	<div class="container-fluid">
		<div class="row">
			<!-- OVERVIEW -->
				<div class="panel panel-headline">
					<div class="panel-heading">
						<h1 class="text-center">Order Menu</h1>
						<hr>
					</div>
					<div class="panel-body">
						<form class="form-horizontal" action="" method="post">
							<div class="form-group">
								<label class="control-label col-sm-2" for="nama_pelanggan">Nama Pelanggan : </label>
								<div class="col-sm-4">
								<select class="form-control" name="namapelanggan" id="id">
									<?php foreach($pelanggan as $namapelanggan):?>
									<option value="<?=$namapelanggan["idpelanggan"] .".".$namapelanggan["nama_pelanggan"]?>"><?=$namapelanggan["nama_pelanggan"]?></option>
									<?php endforeach;?>
								</select>								
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2" for="date">Tanggal : </label>
								<div class="col-sm-4">
									<input class="form-control" type="date" name="datetime" value="<?=$today?>">								
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-2" for="kodemenu">Menu : </label>
								<div class="col-sm-4">
								<select class="form-control" name="idmenu">
									<?php foreach($menus as $menu):?>
									<option value="<?=$menu["idmenu"]." ".$menu["idmenu"]?>"><?="[".$menu["idmenu"]."]" ." [".$menu["nama_menu"]."]"?></option>
									<?php endforeach;?>
								</select>
								
								</div>
								<div class="col-sm-1">
									<input type="number" class="form-control" name="jumlah">
								</div>
								<div class="col-sm-4">
									<button type="submit" class="btn btn-success"name="btnSave">Pilih</button>
								</div>
							</div>
							<div class="modal-footer">
								<div class="form-group">
								<button type="submit" class="btn btn-success" name="submit" >Submit</button>
								</div>
							</div>
						</form> 
					</div>
				</div>
			</div>
			<!-- END OVERVIEW -->
		</div>
		<div class="panel panel-headline">
			<h1 class="title text-center">Daftar Pesanan</h1>
			<hr>
			<div class="panel-body">
			<table class="table table-bordered" id="table">
				<thead>
					<tr>
						<th width="150">Kode Menu</th>
						<th>Nama Menu</th>
						<th>Harga</th>
						<th>Jumlah</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<?php foreach($tmp_pesanan as $pesanan):?>
					<tr>
						<td><?= $pesanan["idmenu"];?></td>
						<td ><?= $pesanan["nama_menu"]; ?></td>
						<td><?= $pesanan["harga"]; ?></td>
						<td><?=$pesanan["jumlah"]?></td>
						<td width="10">
							<a href="?page=transaksi&act=del&id=<?=$pesanan["idmenu"]?>" class="btn btn-danger btn-xs"><i class="fas fa-trash"></i> Delete</a>
						</td>
					</tr>
					<?php endforeach;?>
				</tbody>
			</table>
			</div>
		</div>
	</div>
</div>
<!-- END MAIN CONTENT -->
