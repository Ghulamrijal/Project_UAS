<?php 

include '../koneksi.php';
 

$id = $_POST['iduser'];
$username = $_POST['username'];
$password= $_POST['password'];
$role = $_POST['role'];

 

mysqli_query($koneksi,"update user set username='$username', password='$password', role='$role' where iduser='$id'");
 

header("location:crud_user.php");
 
?>