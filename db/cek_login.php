<?php

$con = mysqli_connect("localhost", "root", "", "biodata");
$user = $_POST['username'];
$pass = md5($_POST['password']);


	$query = mysqli_query($con, "SELECT*from user WHERE username='$user' AND password='$pass'");
	$data = mysqli_fetch_array($query);
	$username = $data['username'];
	$password = $data['password'];
	$level = $data['level'];


	if ($user==$username && $pass==$password) {
		session_start();
		$_SESSION['nama'] = $username;
		$_SESSION['level'] = $level;

		if ($level === 'admin') {
			echo "<script> alert('Anda berhasil login. Sebagai: $level'); </script>";
			echo "<meta http-equiv='refresh' content='0; url=admin/home.php'>";
		}else{
			echo "<script> alert('Anda berhasil login. Sebagai: $level'); </script>";
			echo "<meta http-equiv='refresh' content='0; url=guest/home.php'>";
		}
	}else{
		echo "<script> alert('Username atau Password salah'); </script>";
		echo "<meta content='0; url=../login.php'>";
	}

?>