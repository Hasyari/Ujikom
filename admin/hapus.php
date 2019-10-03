<?php 
require 'functions.php';

// Hapus Data Menu
$id_menu = $_GET["idmenu"];
mysqli_query($conn, "DELETE FROM menu WHERE idmenu = '$id_menu'");
header('location:data_menu.php');

//Hapus Data User
$id_user = $_GET["iduser"];
mysqli_query($conn, "DELETE FROM user WHERE iduser = $id_user");
header('location:data_user.php');

// Hapus Data Perusahaan Pemasok
$id_perusahaan = $_GET["idperusahaan"];
mysqli_query($conn, "DELETE FROM supplier WHERE id_perusahaan = $id_perusahaan");
header('location:data_supplier.php');



?> 