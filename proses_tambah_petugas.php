<?php
		include "koneksi.php";
		$id_petugas = $_POST['id_petugas'];
		$nama_petugas = $_POST['nama_petugas'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$level = $_POST['level'];

		echo $id_petugas." - ".$nama_petugas." - ".$username." - ".$password." - ".$level;
		$sql = "insert into petugas(id_petugas,nama_petugas,username,password,level) values('$id_petugas','$nama_petugas','$username','$password','$level')";
		$result = mysqli_query($mysqli, $sql);	
		header('Location: admin-petugas.php');
 ?>