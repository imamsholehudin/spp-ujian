<?php
		include "koneksi.php";
		$id_spp = $_POST['id_spp'];
		$tahun = $_POST['tahun'];
		$nominal = $_POST['nominal'];

		echo $id_spp." - ".$tahun." - ".$nominal;
		$sql = "insert into spp(id_spp,tahun,nominal) values('$id_spp','$tahun','$nominal')";
		$result = mysqli_query($mysqli, $sql);	
		header('Location: admin-spp.php');
 ?>