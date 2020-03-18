<?php 
	session_start();
	include("koneksi.php");
	$username= $_POST['username'];
	$password = $_POST['password'];

	$data = mysqli_query($mysqli, "select * from petugas where username='".$username."' and password = '".$password."'");
	var_dump($data);
	var_dump($username);
	var_dump($password);
	$cek = mysqli_num_rows($data);
	while($isian = mysqli_fetch_array($data)){
		$level = $isian['level'];
		$nama = $isian['nama_petugas'];
	}
		//var_dump($isian); die;

	if($cek > 0){
		$_SESSION['username'] = $username;
		$_SESSION['level'] = $level;
		$_SESSION['nama']= $nama;
		$_SESSION['status'] = "login";
		if ($_SESSION['level']=="admin") {
			header("location:admin-dashboard.php");
		}else if($_SESSION['level']=="petugas"){
			header("location:petugas-dashboard.php");
		}
		
	}else{
		header("location:login.php?pesan=gagal");
	}
 ?>