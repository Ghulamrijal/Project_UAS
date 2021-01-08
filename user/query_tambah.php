<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$idpegawai = $_POST['idpegawai'];
$username = $_POST['username'];
$password = $_POST['password'];
$role = $_POST['role'];


// menginput data ke database
mysqli_query($koneksi,"insert into user values('','$idpegawai','$username','$password','$role')");

// mengalihkan halaman kembali ke utama
header("location:crud_user.php");

?>