<?php
include 'koneksi.php';
if(isset($_GET['nis'])){
	$delete = mysqli_query($con, "DELETE FROM siswa WHERE nis ='".$_GET{'nis'}."' ");
	header('location:index.php');
}
?>