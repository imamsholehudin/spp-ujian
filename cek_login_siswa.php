<?php 
	session_start();
	include("koneksi.php");
	$nisn = $_POST['nisn'];

	$data = mysqli_query($mysqli, "select * from siswa where nisn=".$nisn);
	//var_dump($data); die;
	$cek = mysqli_num_rows($data);

	if($cek > 0){
		$_SESSION['nisn'] = $nisn;
		$_SESSION['status'] = "login";
		header("location:index.php");
	}else{
		header("location:login-siswa.php?pesan=gagal");
	}
 ?>