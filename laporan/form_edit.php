<!DOCTYPE html>
<html>
<head>
	<title>Form Edit</title>
</head>
<body>

	<h2>DATA PEGAWAI SMARTCITY</h2>
	<br/>
	<a href="laporan_tampil.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT LAPORAN DATA PEGAWAI</h3>

	<?php
	include '../koneksi.php';
	$id = $_GET['idlaporan'];
	$data = mysqli_query($koneksi,"select * from laporan where idlaporan='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="query_edit.php">
        <input type="hidden" name="iduser" value="<?php echo $d['idlaporan']; ?>">
			<table>

				<tr>
					<td>TANGGAL</td>
					<td><input type="date" name="tanggal" value="<?php echo $d['tanggal']; ?>"></td>
				</tr>
				<tr>
					<td>HASIL KERJA</td>
					<td><input type="text" name="hasilkerja" value="<?php echo $d['hasilkerja']; ?>"></td>
				</tr>
				<tr>
					<td>CATATAN</td>
					<td><input type="text" name="catatan" value="<?php echo $d['catatan']; ?>"></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" value="SIMPAN"></td>
				</tr>		
			</table>
		</form>
		<?php 
	}
	?>

</body>
</html>