<!DOCTYPE html>
<html>
<head>
	<title>PEGAWAI KANTOR</title>
</head>
<body>
	<center>
	<h2>LAPORAN HASIL KERJA</h2>
	<br/>
	<br/>
	<br/>
	<table border="2" >
		<tr>
			<th>NO</th>
            <th>NAMA</th>
			<th>TANGGAL</th>
			<th>HASIL KERJA</th>
            <th>CATATAN</th>
            <th>OPSI</th>
		</tr>
		<?php 
		include '../koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi,"SELECT * FROM laporan 
        LEFT JOIN user ON laporan.iduser = user.iduser
        LEFT JOIN pegawai on user.idpegawai = pegawai.idpegawai");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
				<td><?php echo $d['tanggal']; ?></td>
				<td><?php echo $d['hasilkerja']; ?></td>
				<td><?php echo $d['catatan']; ?></td>
				<td>
					<a href="form_edit.php?idlaporan=<?php echo $d['idlaporan']; ?>">EDIT</a>
					<a href="query_hapus.php?idlaporan=<?php echo $d['idlaporan']; ?>">HAPUS</a>
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
	<a href="form_tambah.php">TAMBAH KEGIATAN</a>
</body>
</html>