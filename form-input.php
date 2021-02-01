<!DOCTYPE html>
<html>
<head>
	<title>halaman data SISWA</title>
</head>
<body>
	<H2>
		DATA SISWA
	</H2>
	<a href="index.php ?>" style="padding:0.4% 0.8%;background-color:#009900;color:#fff;border-radius:2px;text-decoration:none;"> data siswa </a><br><br>
	<form action="" method="POST">
	<table>
		<tr>
		<td>nis</td>
		<td>:</td>
		<td><input type="text" name="nis" placeholder="nis" required></td>
		</tr>
		<tr>
		<td>nama lengkap</td>
		<td>:</td>
		<td><input type="text" name="nama" placeholder="nama_lengkap"  required></td>
		</tr>
		<tr>
		<td>telepon</td>
		<td>:</td>
		<td><input type="text" name="telepon" placeholder="telepon"  required></td>
		</tr>
		<tr>
		<td>email</td>
		<td>:</td>
		<td><input type="email" name="email" placeholder="email"  required></td>
		</tr>
		<tr>
		<td>jurusan</td>
		<td>:</td>
		<td>
			<select name="jurusan">
				<option value="sistem informasi">rekayasa perangkat lunak</option>
				<option value="sistem komputer">teknik kom</option>
			</select>
		</tr>
		<td>tombol</td>
		<td></td>
		<td><input type="submit" name="simpan" value="simpan"></td>
		</tr>
	</table>
</form>
<?php
include 'koneksi.php';
if(isset($_POST['simpan'])){
$insert = mysqli_query($con, "INSERT INTO siswa values
	('".$_POST['nis']."',
	'".$_POST['nama']."',
	'".$_POST['telepon']."',
	'".$_POST['email']."',
    '".$_POST['jurusan']."')");

if ($insert){
	echo "berhasil disimpan";
}else{
	echo 'gagal disimpan'.mysqli_error($con);
    }
}
?> 
</body>
</html>