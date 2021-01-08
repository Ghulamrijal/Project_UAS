<!DOCTYPE html>
<html>
<head>
	<title>FORM LAPORAN</title>
</head>
<body>
	<h2>KEGIATAN PEGAWAI SMARTCITY KOTA BATU</h2>
	<br/>
    <br/>
	<a href="laporan_tampil.php">KEMBALI</a>
	<br/>
	<br/>
	<form method="post" action="query_tambah.php">
		<table>
            <tr>
                <td>Nama Pegawai</td>
                <td><select name="idpegawai">
                    <?php 
                    include '../koneksi.php';
                    $sql=mysqli_query($koneksi,"SELECT * FROM user left JOIN pegawai ON user.idpegawai = pegawai.idpegawai");
                    while ($data=mysqli_fetch_array($sql)) {
                    ?>
                    <option value="<?=$data['iduser']?>"><?=$data['nama']?></option> 
                    <?php
                    }
                    ?></select>
                    </td>
            </tr>      
			<tr>			
				<td>TANGGAL</td>
				<td><input type="date" name="tanggal"></td>
			</tr>
			<tr>
				<td>HASIL KERJA</td>
				<td><input type="text" name="hasilkerja"></td>
			</tr>
			<tr>
				<td>CATATAN</td>
				<td><input type="text" name="catatan"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>