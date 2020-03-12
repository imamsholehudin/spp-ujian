<?php 
	include("koneksi.php");
	$id_kelas = $_POST['id_kelas'];
	$nama_kelas = $_POST['nama_kelas'];
	$kompetensi_keahlian = $_POST['kompetensi_keahlian'];

	// echo $nisn."<br>";
	// echo $nis."<br>";
	// echo $nama."<br>";
	// echo $no_telp."<br>";
	// echo $id_spp."<br>";
	// echo $id_kelas."<br>";
	// echo $alamat."<br>";

	$query = "UPDATE kelas SET nama_kelas = '$nama_kelas', kompetensi_keahlian='$kompetensi_keahlian' WHERE id_kelas = '$id_kelas'" ;
	mysqli_query($mysqli,$query);
	header('Location: admin-kelas.php');