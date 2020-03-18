<?php
		include "koneksi.php";
		$nisn = $_POST['nisn'];
		$bayar = $_POST['bayar'];
		$id_petugas = $_POST['id_petugas'];
		$id_spp = $_POST['id_spp'];
		$bulan_dibayar = $_POST['bulan_dibayar'];
		$tahun_dibayar = $_POST['tahun_dibayar'];
		$tanggal = date('Y-m-d');

		echo $nisn." - ".$bayar." - ".$id_petugas." - ".$id_spp." - ".$bulan_dibayar." - ".$tahun_dibayar." - ".$tanggal;
		$sql = "insert into pembayaran(id_petugas,nisn,tgl_bayar,bulan_dibayar,tahun_dibayar,id_spp,jumlah_bayar) values('$id_petugas','$nisn','$tanggal','$bulan_dibayar','$tahun_dibayar','$id_spp','$bayar')";
		$result = mysqli_query($mysqli, $sql);	
		header('Location: petugas-bayar.php');
 ?>