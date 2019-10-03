<?php 

$conn = mysqli_connect("localhost", "root", "", "db_ukom");


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