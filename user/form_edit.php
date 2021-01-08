<!DOCTYPE html>
<html>
<head>
	<title>Form Edit</title>
</head>
<body>

	<h2>DATA PEGAWAI SMARTCITY</h2>
	<br/>
	<a href="user_tampil.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>EDIT USER DATA PEGAWAI</h3>

	<?php
	include '../koneksi.php';
	$id = $_GET['iduser'];
	$data = mysqli_query($koneksi,"select * from user where iduser='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<form method="post" action="query_edit.php">
			<table>
				<tr>
					<td>USERNAME</td>
                    <input type="hidden" name="iduser" value="<?php echo $d['iduser']; ?>">
					<td><input type="text" name="username" value="<?php echo $d['username']; ?>"></td>
				</tr>
				<tr>
					<td>PASSWORD</td>
					<td><input type="text" name="password" value="<?php echo $d['password']; ?>"></td>
				</tr>
                <tr>
					<td>ROLE</td>
                    <td><input type="radio" name="role" value="<?php echo $d['role']; ?>"> ADMIN</td>
    			    <td><input type="radio" name="role" value="<?php echo $d['role']; ?>"> USER</td><br>
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