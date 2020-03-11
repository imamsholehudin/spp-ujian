<?php 
	include("koneksi.php");
	$id_pasien = $_POST['id_pasien'];
	$tanggal = $_POST['tanggal'];
	$anamnese = $_POST['anamnese'];
	$advis = $_POST['advis'];

	echo $id_pasien."<br>";
	echo $tanggal."<br>";
	echo $anamnese."<br>";
	echo $advis."<br>";

	$query = "insert into rekammedik (id_pasien, tgl, keterangan, ads) values('$id_pasien','$tanggal','$anamnese','$advis')";
	mysqli_query($mysqli,$query);
	header('Location: rekam_medik.php');
 ?>