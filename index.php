<!DOCTYPE html>
<html>
<head>
	<title>halaman data SISWA</title>
</head>
<body>
	<H2>
		DATA SISWA
	</H2>
	<a href="form-input.php ?>" style="padding:0.4% 0.8%;background-color:#009900;color:#fff;border-radius:2px;text-decoration:none;">tambah data</a><br><br>
	<table border="1" cellspacing="0" width="50%">
		<tr style= "text-align:center;font-weight:bold;background-color:#eee;">
			<td>no</td>
			<td>nis</td>
			<td>nama siswa</td>
			<td>telepon</td>
			<td>email</td>
			<td>jurusan</td>
			<td>opsi</td>
	    </tr>
	<?php
	include 'koneksi.php';
	$no = 1;
	$select = mysqli_query($con, "SELECT * FROM  siswa");
	if(mysqli_num_rows($select)> 0){
	while($hasil = mysqli_fetch_array($select)){
	?>
	<tr style= "text-align:center;">
		   <td><?php echo $no++ ?></td>
			<td><?php echo $hasil['nis'] ?></td>
			<td><?php echo $hasil['nama_lengkap'] ?></td>
			<td><?php echo $hasil['telepon'] ?></td>
			<td><?php echo $hasil['email'] ?></td>
			<td><?php echo $hasil['jurusan'] ?></td>
			<td>
				<a href="form-edit.php?nis=<?php echo $hasil['nis'] ?>">Edit</a> ||
				<a href="delete.php?nis=<?php echo $hasil['nis'] ?>">hapus</a> 
		    </td>
		</tr>
		<?php }}else{ ?>
			<tr>
				<td colspan="7" align="center">data kosong</td>
			</tr>
		<?php } ?>
	</table>
</body>
</html>