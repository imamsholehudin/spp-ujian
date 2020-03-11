<?php 
	include("koneksi.php");
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$nama_keluarga = $_POST['nama_keluarga'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$agama = $_POST['agama'];
	$no_telp = $_POST['no_telp'];
	$alamat = $_POST['alamat'];

	echo $id."<br>";
	echo $nama."<br>";
	echo $nama_keluarga."<br>";
	echo $tgl_lahir."<br>";
	echo $agama."<br>";
	echo $no_telp."<br>";
	echo $alamat."<br>";
	$query = "UPDATE pasien SET nama = '$nama', nama_keluarga='$nama_keluarga', tgl_lahir = '$tgl_lahir', agama = '$agama', alamat = '$alamat', no_telp = '$no_telp' WHERE id = '$id'" ;
	mysqli_query($mysqli,$query);
	header('Location: index.php');


 ?>