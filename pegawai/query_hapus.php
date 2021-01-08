<?php 

include '../koneksi.php';


$id = $_GET['idpegawai'];



mysqli_query($koneksi,"delete from pegawai where idpegawai='$id'");


header("location:crud_pegawai.php");

?>