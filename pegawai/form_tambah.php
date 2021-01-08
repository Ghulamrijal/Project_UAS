<!DOCTYPE html>
<html>
<head>
	<title>FORM TAMBAH PEGAWAI</title>
</head>
<body>
	<h2>DATA PEGAWAI SMARTCITY KOTA BATU</h2>
	<br/>
    <br/>
	<a href="pegawai_tampil.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>TAMBAH DATA PEGAWAI</h3>
	<form method="post" action="query_tambah.php">
		<table>
			<tr>			
				<td>NAMA</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>JABATAN</td>
				<td><input type="text" name="jabatan"></td>
			</tr>
			<tr>
				<td>ALAMAT</td>
				<td><input type="text" name="alamat"></td>
			</tr>
            <tr>
				<td>EMAIL</td>
				<td><input type="text" name="email"></td>
			</tr>
            <tr>
				<td>UMUR</td>
				<td><input type="text" name="umur"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>