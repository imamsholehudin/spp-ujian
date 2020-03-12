<?php
		include "koneksi.php";
		$nisn = $_POST['nisn'];
		$nis = $_POST['nis'];
		$nama = $_POST['nama'];
		$id_kelas = $_POST['id_kelas'];
		$alamat = $_POST['alamat'];
		$no_telp = $_POST['no_telp'];

		echo $nisn." - ".$nis." - ".$nama." - ".$id_kelas." - ".$alamat." - ".$no_telp;
		$sql = "insert into siswa(nisn,nis,nama,id_kelas,alamat,no_telp) values('$nisn','$nis','$nama','$id_kelas','$alamat','$no_telp')";
		$result = mysqli_query($mysqli, $sql);	
		header('Location: admin-siswa.php');
 ?>