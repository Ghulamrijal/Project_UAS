<?php 

include '../koneksi.php';


$id = $_GET['iduser'];



mysqli_query($koneksi,"delete from user where iduser='$id'");


header("location:crud_user.php");

?>