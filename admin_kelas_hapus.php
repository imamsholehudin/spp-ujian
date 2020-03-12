<?php 
	include("koneksi.php");
	$id = $_GET['id'];

	$query = "delete from kelas where id_kelas = '$id'";
	mysqli_query($mysqli,$query);	
	header('Location: admin-kelas.php');	
 ?>