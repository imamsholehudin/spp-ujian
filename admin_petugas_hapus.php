<?php 
	include("koneksi.php");
	$id = $_GET['id'];

	$query = "delete from petugas where id_petugas = '$id'";
	mysqli_query($mysqli,$query);	
	header('Location: admin-petugas.php');	
 ?>