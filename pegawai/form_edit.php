<!DOCTYPE html>
<html>
<head>
	<title>Form Edit</title>
</head>
<body>

	<h2>DATA PEGAWAI SMARTCITY</h2>
	<br/>
	<a href="pegawai_tampil.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT DATA PEGAWAI</h3>

	<?php
	include '../koneksi.php';
	$id = $_GET['idpegawai'];
	$data = mysqli_query($koneksi,"select * from pegawai where idpegawai='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="query_edit.php">
			<table>
				<tr>
					<td>NAMA</td>
                    <input type="hidden" name="idpegawai" value="<?php echo $d['idpegawai']; ?>">
					<td><input type="text" name="nama" value="<?php echo $d['nama']; ?>"></td>
				</tr>
				<tr>
					<td>ALAMAT</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
				</tr>
                <tr>
					<td>JABATAN</td>
					<td><input type="text" name="jabatan" value="<?php echo $d['jabatan']; ?>"></td>
				</tr>
                <tr>
					<td>Email</td>
					<td><input type="text" name="email" value="<?php echo $d['email']; ?>"></td>
				</tr>
                <tr>
					<td>umur</td>
					<td><input type="number" name="umur" value="<?php echo $d['umur']; ?>"></td>
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