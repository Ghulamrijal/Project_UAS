<!DOCTYPE html>
<html>
<head>
	<title>PEGAWAI KANTOR</title>
</head>
<body>
	<center>
	<h2>DATA PEGAWAI SMARTCITY KOTA BATU</h2>
	<br/>
	<br/>
	<br/>
	<table border="2" class="table1">
		<tr>
			<th>NO</th>
			<th>NAMA</th>
			<th>JABATAN</th>
			<th>ALAMAT</th>
            <th>EMAIL</th>
            <th>UMUR</th>
            <th>OPSI</th>
		</tr>
		<?php 
		include '../koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"select * from pegawai");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['jabatan']; ?></td>
				<td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['email']; ?></td>
                <td><?php echo $d['umur']; ?></td>
				<td>
					<a href="form_edit.php?idpegawai=<?php echo $d['idpegawai']; ?>">EDIT</a>
					<a href="query_hapus.php?idpegawai=<?php echo $d['idpegawai']; ?>">HAPUS</a>
				</td>
			</tr>
			<?php 
		}
		?>
	</table>
	<br/>
	<br/>
	<br/>
	<br/>
	<a href="form_tambah.php" class="button">TAMBAH PEGAWAI</a>
</body>
</html>