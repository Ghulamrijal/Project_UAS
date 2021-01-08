<?php 

include '../koneksi.php';
 

$id = $_POST['idlaporan'];
$tanggal = $_POST['tanggal'];
$hasilkerja = $_POST['hasilkerja'];
$catatan = $_POST['catatan'];


 

mysqli_query($koneksi,"update laporan set tanggal='$tanggal', hasilkerja='$hasilkerja', catatan='$catatan' where idlaporan='$id'");
 

header("location:crud_laporan_user.php");
 
?>