<?php
    session_start();
    include 'koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $data = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' and password='$password'");


    $cek = mysqli_num_rows($data);
    $dump = mysqli_fetch_assoc($data);
    print_r($dump['role']);

    if($cek == 1){
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";

        if($dump['role']== "ADMIN"){

        header("location:admin_home.php"); }  
        elseif($dump['role']== "USER"){
        header("location:user_home.php");
        }
    }
    else{
        header("location:index.php?pesan=gagal");
    }
    ?>