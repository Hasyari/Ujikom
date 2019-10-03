<?php 
session_start();
$conn = mysqli_connect("localhost", "root", "", "db_ukom");


if(isset($_POST["login"])){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $kd_user = mysqli_query($conn, "SELECT * FROM user WHERE");    
    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
    if(mysqli_num_rows($result) === 1){
        $rows = mysqli_fetch_assoc($result);
        if($password == $rows["password"]){
            if($username == "admin"){
                $_SESSION["login"] = true;
                header("location:admin");
                exit;
            }
            if($username == "kasir"){
                $_SESSION["login"] = true;
                header("location:kasir");
                exit;
            }
            if($username == "owner"){
                $_SESSION["login"] = true;
                header("location:owner");
                exit;
            }  
            if($username == "waiter"){
                $_SESSION["login"] = true;
                header("location:waiter");
                exit;
            }
        }
    }  
    $errors = true;
    
}


?>