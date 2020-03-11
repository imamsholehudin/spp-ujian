<?php
		include "koneksi.php";
		$id_kelas = $_POST['id_kelas'];
		$nama_kelas = $_POST['nama_kelas'];
		$kompetensi_keahlian = $_POST['kompetensi_keahlian'];

		echo $id_kelas." - ".$nama_kelas." - ".$kompetensi_keahlian;
		$sql = "insert into kelas(id_kelas,nama_kelas,kompetensi_keahlian) values('$id_kelas','$nama_kelas','$kompetensi_keahlian')";
		$result = mysqli_query($mysqli, $sql);	
		header('Location: admin-kelas.php');
 ?>