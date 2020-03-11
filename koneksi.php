<?php
	date_default_timezone_set('Asia/Jakarta');
	$mysqli=mysqli_connect("localhost","root","","ujikom_spp_imam");

	if(!$mysqli){
		die("Koneksi Gagal: ".mysqli_connect_error());
	}
?>