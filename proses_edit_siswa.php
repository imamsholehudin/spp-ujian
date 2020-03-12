<?php 
	include("koneksi.php");
	$nisn = $_POST['nisn'];
	$nis = $_POST['nis'];
	$nama = $_POST['nama'];
	$no_telp = $_POST['no_telp'];
	$id_spp = $_POST['id_spp'];
	$id_kelas = $_POST['id_kelas'];
	$alamat = $_POST['alamat'];

	echo $nisn."<br>";
	echo $nis."<br>";
	echo $nama."<br>";
	echo $no_telp."<br>";
	echo $id_spp."<br>";
	echo $id_kelas."<br>";
	echo $alamat."<br>";

	//$query = "UPDATE kelas SET nama_kelas = '$nama_kelas', kompetensi_keahlian='$kompetensi_keahlian' WHERE id_kelas = '$id_kelas'" ;
	//mysqli_query($mysqli,$query);
	//header('Location: admin-kelas.php');

	$query = "UPDATE siswa SET nis = '$nis', nama='$nama', no_telp='$no_telp', id_spp='$id_spp', id_kelas='$id_kelas', alamat='$alamat' WHERE nisn = '$nisn'" ;
	mysqli_query($mysqli,$query);
	header('Location: admin-siswa.php');



	//$query = "UPDATE kelas SET nama_kelas = '$nama_kelas', kompetensi_keahlian='$kompetensi_keahlian' WHERE id_kelas = '$id_kelas'" ;
	//mysqli_query($mysqli,$query);
	//header('Location: admin-kelas.php');


 ?>