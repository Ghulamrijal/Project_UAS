<?php 
// koneksi database
include '../koneksi.php';

// menangkap data yang di kirim dari form
$idpegawai = $_POST['idpegawai'];
$tanggal = $_POST['tanggal'];
$hasilkerja = $_POST['hasilkerja'];
$catatan = $_POST['catatan'];


// menginput data ke database
mysqli_query($koneksi,"insert into laporan values('','$idpegawai','$tanggal','$hasilkerja','$catatan')");

// mengalihkan halaman kembali ke utama
header("location:crud_laporan.php");

?>