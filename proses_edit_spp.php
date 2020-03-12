<?php 
	include("koneksi.php");
	$id_spp = $_POST['id_spp'];
	$tahun = $_POST['tahun'];
	$nominal = $_POST['nominal'];

	echo $tahun."<br>";
	echo $nominal."<br>";

	$query = "UPDATE spp SET tahun = '$tahun', nominal='$nominal' WHERE id_spp = '$id_spp'" ;
	mysqli_query($mysqli,$query);
	header('Location: admin-spp.php');


 ?>