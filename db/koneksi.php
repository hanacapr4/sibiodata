<?php

	$db_host = "localhost";
	$db_user = "root";
	$db_pass = "";
	$db_name = "biodata";

	$link = mysql_connect($db_host, $db_user, $db_pass, $db_name);

	if (!$link) {
		die("Gagal menyambungkan ".mysqli_connect_errno()." - ".mysql_connect_eror() );
		exit();
	}else{
		echo "Koneksi berhasil";
	}

?>