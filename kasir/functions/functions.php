<?php 

$conn = mysqli_connect("localhost", "root", "", "db_ukom");

//autonumber idtransaksi
$cari_id = mysqli_query($conn,"SELECT max(idtransaksi) as kode FROM transaksi");
$tm_cari = mysqli_fetch_array($cari_id);
$kode = substr($tm_cari["kode"],0-3);
$tambah = (int)++$kode;
if($tambah < 10){
    // variabel if idtransaksi
    $if = "TR00".$tambah;
}
else{
    $if = "TR0".$tambah;
}

function query($data){
    global $conn;
    $result = mysqli_query($conn, $data);
    $rows = [];
    while($row=mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}
?>