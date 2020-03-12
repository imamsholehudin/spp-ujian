<?php 
	include("koneksi.php");
	$id = $_GET['id'];

	$query = "delete from siswa where nisn = '$id'";
	mysqli_query($mysqli,$query);	
	header('Location: admin-siswa.php');	
 ?>