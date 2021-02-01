<?php
include 'koneksi.php';
$data_edit = mysqli_query($con, "SELECT * FROM siswa WHERE  nis = '".$_GET['nis']."'");
$result = mysqli_fetch_array($data_edit);
?>
<!DOCTYPE html>
<html>
<head>
	<title>halaman edit data SISWA</title>
</head>
<body>
	<H2>
		EDIT SISWA
	</H2>
	<a href="index.php ?>" style="padding:0.4% 0.8%;background-color:#009900;color:#fff;border-radius:2px;text-decoration:none;"> data siswa </a><br><br>
	<form action="" method="POST">
	<table>
		<tr>
		<td>nis</td>
		<td>:</td>
		<td><input type="text" name="nis" value="<?php echo $result ['nis'] ?>"required></td>
		</tr>
		<tr>
		<td>nama lengkap</td>
		<td>:</td>
		<td><input type="text" name="nama" value="<?php echo $result ['nama_lengkap'] ?>"  required></td>
		</tr>
		<tr>
		<td>telepon</td>
		<td>:</td>
		<td><input type="text" name="telepon" value="<?php echo $result ['telepon'] ?>"  required></td>
		</tr>
		<tr>
		<td>email</td>
		<td>:</td>
		<td><input type="email" name="email" value="<?php echo $result ['email'] ?>" required></td>
		</tr>
		<tr>
		<td>jurusan</td>
		<td>:</td>
		<td>
			<select name="jurusan">
				<option value="<?php echo $result ['jurusan'] ?>"><?php echo $result ['jurusan'] ?></option>
				<option value="sistem informasi">rekayasa perangkat lunak</option>
				<option value="sistem komputer">teknik komputer jaringan</option>
			</select>
		</tr>
		<td>tombol</td>
		<td></td>
		<td><input type="submit" name="edit" value="simpan"></td>
		</tr>
	</table>
</form>
<?php
if(isset($_POST['edit'])){
  $update = mysqli_query($con, "UPDATE siswa SET nama_lengkap = '".$_POST['nama']."',
  	telepon = '".$_POST['telepon']."',email = '". $_POST['email']."' ,jurusan ='".$_POST['jurusan']."'
  	WHERE nis = '".$_GET['nis']."'");
  if ($update) {
    echo "berhasil diedit";
  }else{
  	echo "gagal diedit";
  }

}
?> 
</body>
</html>