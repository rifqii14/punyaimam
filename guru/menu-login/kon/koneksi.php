<?php
	$host="localhost";
	$user="root";
	$pass="";
	$database="tesss";
	$mysqli=new mysqli($host,$user,$pass,$database);
	if (mysqli_connect_errno()) {
	  trigger_error('Koneksi ke database gagal: '  . mysqli_connect_error(), E_USER_ERROR);
	}
?>
<?php 
$koneksi = mysqli_connect("localhost","root","","tesss");
?>