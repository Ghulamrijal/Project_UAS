<?php 

include '../koneksi.php';


$id = $_GET['idlaporan'];



mysqli_query($koneksi,"delete from laporan where idlaporan='$id'");


header("location:crud_laporan.php");

?>