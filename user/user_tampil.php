<!DOCTYPE html>
<html>
<head>
	<title>PEGAWAI KANTOR</title>
</head>
<body>
	<center>
	<h2>USER KOTA BATU</h2>
	<br/>
	<br/>
	<br/>
	<table border="2" >
		<tr>
			<th>NO</th>
			<th>NAMA</th>
			<th>USERNAME</th>
			<th>PASSWORD</th>
			<th>ROLE</th>
            <th>OPSI</th>
		</tr>
		<?php 
		include '../koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"SELECT * FROM user left JOIN pegawai ON user.idpegawai = pegawai.idpegawai");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['username']; ?></td>
				<td><?php echo $d['password']; ?></td>
				<td><?php echo $d['role']; ?></td>
				<td>
					<a href="form_edit.php?iduser=<?php echo $d['iduser']; ?>">EDIT</a>
					<a href="query_hapus.php?iduser=<?php echo $d['iduser']; ?>">HAPUS</a>
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