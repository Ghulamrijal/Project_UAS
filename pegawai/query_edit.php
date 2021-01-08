<?php 

include '../koneksi.php';
 

$id = $_POST['idpegawai'];
$nama = $_POST['nama'];
$alamat= $_POST['alamat'];
$jabatan = $_POST['jabatan'];
$email = $_POST['email'];
$umur = $_POST['umur'];

 

mysqli_query($koneksi,"update pegawai set nama='$nama', alamat='$alamat', jabatan='$jabatan', email='$email', umur='$umur' where idpegawai='$id'");
 

header("location:crud_pegawai.php");
 
?>