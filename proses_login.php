<?php
session_start();

include "config.php";

$username = $_POST["username"];
$pass = md5($_POST["password"]);

$sql = "select * from user where username='".$username."' and password='".$pass."' limit 1";
$hasil = mysqli_query ($koneksi,$sql);
$jumlah = mysqli_num_rows($hasil);


	if ($jumlah>0) {
		$row = mysqli_fetch_assoc($hasil);
		$_SESSION["id_admin"]=$row["id_admin"];
		$_SESSION["username"]=$row["username"];
		
		print"<script>
                alert('Login Berhasil') 
                window.location.href ='home.php'
            </script>"; 

		
	}else {
		print"<script>
                alert('username dan password salah') 
                window.location.href ='index.php'
            </script>"; 
	}
?>