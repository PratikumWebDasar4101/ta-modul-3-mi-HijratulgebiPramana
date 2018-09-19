<?php 
session_start();
if (isset($_SESSION["username"])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Upload</title>
</head>
<body>
	<form action="upload.php" method="POST" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td>
					<select name="fakultas" id="fakultas">
						<option value="Fakultas Ilmu Terapan">Fakultas Ilmu Terapan</option>
						<option value="Fakultas Teknik Elektro">Fakultas Teknik Elektro</option>
						<option value="Fakultas Rekayasa Industri">Fakultas Rekayasa Industri</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><input type="radio" value="Laki-laki" name="jkl">Laki-laki <input type="radio" value="Perempuan" name="jkl">Perempuan</td>
			</tr>
			<tr>
				<td>File Gambar</td>
				<td>:</td>
				<td><input type="file" name="file_gbr" id="file_gbr"></td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" value="upload"></td>
			</tr>
		</table>
	</form>
</body>
</html>
<?php 
}else {
	header("Location: login.php");
}
?>
