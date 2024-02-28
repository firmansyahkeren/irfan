<?php 
// koneksi database
include '../koneksi.php';

$user = mysqli_query($koneksi,"SELECT * FROM user");
 
// menangkap data yang di kirim dari form
if (isset($_POST['simpan'])){
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into user values('','$nama','$username','$password','$level')");
 
// mengalihkan halaman kembali ke index.php
header("location:user.php");
}
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>File User</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
 
	<h2>Tambah Data</h2>
	<form method="post">
		<table>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
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
				<td>Role Akses</td>
				<td><input type="text" name="level"></td>
			</tr>
		</table>
		      <input type="submit" name="simpan" value="SIMPAN" class="btn btn-primary">
					<a href="user.php" class="btn btn-danger">Back</a>
	</form>
</body>
</html>