<?php 
error_reporting(0);
$pelanggan = query("SELECT * FROM pelanggan");
$pesanan = query("SELECT pesanan.idpelanggan, pelanggan.nama_pelanggan, pesanan.jumlah, pesanan.idmenu, menu.harga, menu.nama_menu
					FROM pesanan 
					JOIN menu ON pesanan.idmenu = menu.idmenu 
					JOIN pelanggan ON pesanan.idpelanggan = pelanggan.idpelanggan;");
$transaksi = query("SELECT * FROM tmp_transaksi");

//kirim data ke tmp_transaksi
if(isset($_POST["btnKirim"])){
	$nama = $_POST["namapelanggan"];
	$nama_pelanggan = explode(".", $nama)[1];
	
	foreach ($pesanan as $data_pesanan) {
		if($nama_pelanggan === $data_pesanan["nama_pelanggan"]){
			$idpelanggan = (int)$data_pesanan["idpelanggan"];
			$idmenu = $data_pesanan["idmenu"];
			$nama_menu = $data_pesanan["nama_menu"];
			$jumlah = (int)$data_pesanan["jumlah"];
			$harga = (int)$data_pesanan["harga"];
			//kirim data ke tmp_transaksi
			$query = "INSERT INTO tmp_transaksi 
						VALUES
					(NULL, '$idmenu', '$nama_menu' ,$idpelanggan, '$nama_pelanggan', $jumlah, $harga)";
			mysqli_query($conn, $query);

			$delete_pesanan = "DELETE FROM pesanan WHERE idpelanggan = $idpelanggan";
			mysqli_query($conn, $delete_pesanan);
			
			echo "<meta http-equiv='refresh' content='0'>";
			
		}
	}
}

// untuk Mengurangi Total dengan bayar
if(isset($_POST["btnTrans"])){
	$total = (int)$_POST["total"];
	$bayar = (int)$_POST["bayar"];
	if($bayar == 0){
		echo "
			<script>alert('Input Bayar')</script>
		";
	}

	$kembalian = $bayar - $total;

}
if(isset($_POST["btnReset"])){
	$bayar_tr = (int)$_POST["bayar_tr"];
	$total = (int)$_POST["total"];
	$nama_pelanggan = $_POST["namapelanggan"];

	$data = "DELETE FROM tmp_transaksi WHERE nama_pelanggan = '$nama_pelanggan'";
	$ret = mysqli_query($conn, $data);
	if($ret){
		echo "<meta http-equiv='refresh' content='0'>";
	}

}

?>
<!-- MAIN CONTENT -->
<div class="main-content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-5">
				<div class="panel panel-headline">
					<div class="panel-heading">
						<h1 class="text-center">Pelanggan</h1>
						<hr>
					</div>
					<div class="panel-body">
					<form class="form-horizontal" action="" method="POST">
						<div class="form-group">
							<label class="control-label col-sm-5" for="plg">Nama Pelanggan:</label>
							<div class="col-sm-7">
							<select name="namapelanggan" id="plg" class="form-control" name="namapelanggan">
								<?php foreach($pelanggan as $nama_pelanggan):?>
								<option value="<?= $nama_pelanggan["idpelanggan"].".".$nama_pelanggan["nama_pelanggan"]?>"><?= $nama_pelanggan["nama_pelanggan"]?></option>
								<?php endforeach;?>
							</select>
						</div>
						</div>
						<div class="form-group">
							<label class="control-label col-sm-2" for="tgl" name="tgl">Tanggal:</label>
							<div class="col-sm-10"> 
							<input type="date" class="form-control" id="tgl" value="<?php echo date('Y-m-d'); ?>">
							</div>
						</div>
						<div class="modal-footer"> 
							<div class="col-sm-offset-2 col-sm-10">
							<button type="submit" class="btn btn-success" id="btnKirim" name="btnKirim">Submit</button>
							</div>
						</div>
					</form>
					</div>
				</div>
			</div>
			<div class="col-sm-7">
			<!-- OVERVIEW -->
			<div class="panel panel-headline">
					<div class="panel-heading">
						<h1 class="text-center">Order Menu</h1>
						<hr>
					</div>
					<div class="panel-body">
						<form class="form-horizontal" action="" method="POST">
							<div class="form-group">
								<label class="control-label col-sm-4" for="idtrans" >No. Transaksi :</label>
								<div class="col-sm-8"> 
								<input type="text" class="form-control" id="idtrans" value="<?= $if;?>" readonly>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-4">Nama Pelanggan : </label>
								<div class="col-sm-8"> 
								<input type="text" class="form-control" name="namapelanggan" value="<?= $transaksi[0]["nama_pelanggan"]?>" readonly>
								</div>
							</div>
							<table class="table table-bordered">
								<thead>
									<tr>
										<th width="150">Kode Menu</th>
										<th>Nama Menu</th>
										<th width="100">Jumlah</th>
										<th>Harga</th>
									</tr>
								</thead>
								<tbody>

									<?php 
										$total = 0;
										$subTotal = 0;
										foreach($transaksi as $data_transaksi):
											$id = $data_transaksi["idmenu"];
											$nama_menu = $data_transaksi["nama_menu"];
											$subTotal = (int)$data_transaksi["jumlah"] * (int)$data_transaksi["harga"];
											$total += (int)$data_transaksi["harga"];
									?>
									
									<tr>
										<td><?=$id;?></td>
										<td><?=$nama_menu;?></td>
										<td><?=(int)$data_transaksi["jumlah"]?></td>
										<td><?="Rp. ".$subTotal;?></td>
									</tr>

									<?php endforeach;?>
									<tr>
										<td class="text-center" colspan="3">Total </td>
										<td><?=  "Rp. ".$total;?></td>
									</tr>
								</tbody>

								<input type="hidden" name="total" value="<?=$total;?>">
								<input type="hidden" name="bayar_tr" value="<?=$bayar;?>">
							</table>
							<div class="form-group">
								<label class="control-label col-sm-3" for="tgl" >Bayar :</label>
								<div class="col-sm-9"> 
								<input type="number" class="form-control" id="tgl" value="0" name="bayar">
								</div>
							</div>
							<div class="form-group">
								<label class="control-label col-sm-3" for="tgl" >Kembalian :</label>
								<div class="col-sm-9"> 
								<input type="number" class="form-control" id="tgl" value="<?= $kembalian;?>" name="kembalian">
								</div>
							</div>
							<div class="modal-footer"> 
								<button type="submit" class="btn btn-primary" name="btnTrans">Bayar</button>
								<button type="submit" class="btn btn-primary" name="btnReset">Reset</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- END OVERVIEW -->
	</div>
</div>
<!-- END MAIN CONTENT -->
