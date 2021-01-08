<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jabatan = $_POST['jabatan'];
$email = $_POST['email'];
$umur = $_POST['umur'];

// menginput data ke database
mysqli_query($koneksi,"insert into pegawai values('','$nama','$alamat','$jabatan','$email','$umur')");

// mengalihkan halaman kembali ke utama
header("location:crud_pegawai.php");

?>