<!DOCTYPE html>
<html>
<head>
	<title>FORM TAMBAH PEGAWAI</title>
</head>
<body>
	<h2>TAMBAH USER PEGAWAI SMARTCITY KOTA BATU</h2>
	<br/>
    <br/>
	<a href="user_tampil.php">KEMBALI</a>
	<br/>
	<br/>
	<form method="post" action="query_tambah.php">
		<table>
            <tr>
                <td>Nama Pegawai</td>
                <td><select name="idpegawai">
                    <?php 
                    include '../koneksi.php';
                    $sql=mysqli_query($koneksi,"SELECT * FROM pegawai");
                    while ($data=mysqli_fetch_array($sql)) {
                    ?>
                    <option value="<?=$data['idpegawai']?>"><?=$data['nama']?></option> 
                    <?php
                    }
                    ?></select>
                    </td>
             </tr>       
			<tr>			
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr>
				<td>Role</td>
				<td><input type="radio" name="role" value="ADMIN"> ADMIN</td>
    			<td><input type="radio" name="role" value="USER"> USER</td><br>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>