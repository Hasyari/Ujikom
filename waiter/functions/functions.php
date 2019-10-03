<?php 

$conn = mysqli_connect("localhost", "root", "", "db_ukom");

$month = date('m');
$day = date('d');
$year = date('Y');
$sekarang = $day." - ".$month." - ".$year;
$today = $year . '-' . $month . '-' . $day;

function query($data){
    global $conn;
    $result = mysqli_query($conn, $data);
    $rows = [];
    while($row=mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}
function tambah_pelanggan($data){
    global $conn;
    $nama_pelanggan = $_POST["nama"];

    $query = "INSERT INTO pelanggan VALUES(NULL, '$nama_pelanggan')";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);

}

?>