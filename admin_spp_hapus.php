<?php 
	include("koneksi.php");
	$id = $_GET['id'];

	$query = "delete from spp where id_spp = '$id'";
	mysqli_query($mysqli,$query);	
	header('Location: admin-spp.php');	
 ?>