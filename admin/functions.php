<?php 
$conn = mysqli_connect("localhost", "root", "", "db_ukom");

// Auto Number idmenu
$cari_id = mysqli_query($conn,"SELECT max(idmenu) as kode FROM menu");
$tm_cari = mysqli_fetch_array($cari_id);
$kode = substr($tm_cari["kode"],0-3);
$tambah = $kode + 1;
if($tambah < 10){
    $if = "M-00".$tambah;
}
else{
    $if = "M-0".$tambah;
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

function tambah_menu($data){
    global $conn;
    $idmenu = $_POST["idmenu"];
    $nama_menu = $_POST["nama_menu"];
    $harga = $_POST["harga_menu"];

    $query = "INSERT INTO menu VALUES('$idmenu', '$nama_menu', '$harga')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function tambah_user($data){
    global $conn;
    $iduser = $_POST["iduser"];
    $nama = $_POST["nama"];
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "INSERT INTO user VALUES($iduser, '$nama', '$username', '$password')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function tambah_supplier($data){
    global $conn;
    $id_perusahaan = $_POST["id_perusahaan"];
    $nama_perusahaan = $_POST["nama_perusahaan"];
    $no_telepon = $_POST["no_telepon"];

    $query = "INSERT INTO supplier VALUES($id_perusahaan, '$nama_perusahaan', '$no_telepon')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

function ubah_menu($data){
    global $conn;

    $idmenu = $_POST["idmenu"];
    $nama_menu = $_POST["nama_menu"];
    $harga = $_POST["harga_menu"];

    $query = "UPDATE menu SET nama_menu = '$nama_menu', harga = $harga WHERE idmenu = '$idmenu'";
    mysqli_query($conn, $query);
    
    mysqli_affected_rows($conn);
    

}

function ubah_user($data){
    global $conn;
    $iduser = $_POST["iduser"];
    $nama = $_POST["nama"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    
    $query = "UPDATE user SET nama = '$nama', username = '$username', password = '$password' WHERE iduser = $iduser";
    mysqli_query($conn, $query);
    mysqli_affected_rows($conn);
    

}

function ubah_supplier($data){
    global $conn;

    $id_perusahaan = $_POST["id_perusahaan"];
    $nama_perusahaan = $_POST["nama_perusahaan"];
    $no_telepon = $_POST["no_telepon"];
    
    
    $query = "UPDATE supplier SET nama_perusahaan = '$nama_perusahaan', no_telepon = '$no_telepon' WHERE id_perusahaan = $id_perusahaan";
    mysqli_query($conn, $query);
    mysqli_affected_rows($conn);
    
}

?>