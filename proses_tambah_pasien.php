<?php 
	include("koneksi.php");

	$nama = $_POST['nama'];
	$nama_keluarga = $_POST['nama_keluarga'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$agama = $_POST['agama'];
	$no_telp = $_POST['no_telp'];
	$alamat = $_POST['alamat'];


	echo $nama."<br>";
	echo $nama_keluarga."<br>";
	echo $tgl_lahir."<br>";
	echo $agama."<br>";
	echo $no_telp."<br>";
	echo $alamat."<br>";
	$query = "insert into pasien (nama, nama_keluarga, tgl_lahir, agama, alamat, no_telp) values ('$nama','$nama_keluarga', '$tgl_lahir', '$agama', '$alamat', '$no_telp')";
	$result = mysqli_query($mysqli, $query);
	header('Location: index.php');
 ?>